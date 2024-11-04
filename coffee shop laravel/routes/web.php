<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk halaman login
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/signup', [UserController::class, 'signup'])->name('signup');
Route::post('/check-email', [UserController::class, 'checkEmail'])->name('check.email');
Route::post('/check-reset-otp', [UserController::class, 'checkResetOtp'])->name('check.reset.otp');
Route::post('/change-password', [UserController::class, 'changePassword'])->name('change.password');
