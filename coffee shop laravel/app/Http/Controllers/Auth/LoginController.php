<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan Anda memiliki tampilan auth/login.blade.php
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mendapatkan nilai remember dari form
        $remember = $request->has('rememberMe');

        // Cek kredensial
        if (Auth::attempt($request->only('email', 'password'), $remember)) {
            // Jika login berhasil, redirect ke halaman pengguna
            return redirect()->intended('home'); // Ganti 'home' dengan rute yang sesuai
        }

        // Jika login gagal, kembali ke form login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ]);
    }
}
