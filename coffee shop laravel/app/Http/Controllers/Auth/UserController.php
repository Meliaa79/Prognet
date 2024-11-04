<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session; 
use App\Mail\VerificationCodeMail; 
use App\Models\User;

class UserController extends Controller
{
    // Existing signup method
    public function signup(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->code = rand(100000, 999999); // Generate OTP code
        $user->status = 'notverified';

        if ($user->save()) {
            Mail::to($user->email)->send(new VerificationCodeMail($user->code));
            Session::put('info', "We've sent a verification code to your email - {$user->email}");
            return redirect()->route('user.otp');
        } else {
            return back()->withErrors(['db-error' => 'Failed while inserting data into the database!']);
        }
    }

    public function showLoginForm()
{
    return view('login'); // Pastikan ini mengarah ke login.blade.php
}

    // New login method
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->filled('rememberMe'))) {
            // Redirect to a specific route on successful login
            return redirect()->intended('dashboard'); // Change 'dashboard' to your desired route
        } else {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }

    public function checkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $user->code = rand(100000, 999999);
            $user->save();

            Mail::to($user->email)->send(new VerificationCodeMail($user->code));
            Session::put('info', "We've sent a password reset OTP to your email - {$user->email}");
            return redirect()->route('reset.code');
        } else {
            return back()->withErrors(['email' => "This email address does not exist!"]);
        }
    }

    public function checkResetOtp(Request $request)
    {
        $request->validate(['otp' => 'required|integer']);

        $user = User::where('code', $request->otp)->first();

        if ($user) {
            Session::put('email', $user->email);
            Session::put('info', "Please create a new password that you don't use on any other site.");
            return redirect()->route('new.password');
        } else {
            return back()->withErrors(['otp-error' => "You've entered an incorrect code!"]);
        }
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::where('email', Session::get('email'))->first();

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->code = null; // Clear the OTP code
            $user->save();

            Session::put('info', "Your password has been changed. Now you can log in with your new password.");
            return redirect()->route('password.changed');
        } else {
            return back()->withErrors(['db-error' => 'Failed to change your password!']);
        }
    }
}
