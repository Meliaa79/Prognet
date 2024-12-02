<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('login');
    }

    // Proses autentikasi
    // Di controller login

public function login(Request $request)
{
    $credentials = $request->only('nik', 'password');

    if (Auth::attempt($credentials)) {
        // Login sukses
        return redirect()->intended('/home');
    }

    // Login gagal
    return redirect()->back()->withErrors('NIK atau password salah');
}
}