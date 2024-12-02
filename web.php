<?php

use App\Http\Controllers\PetugasController;
use App\Http\Controllers\DataLaporanController;
use App\Http\Controllers\LaporanAkhirController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\RiwayatLaporanUserController;
use App\Http\Controllers\AdminDasboardController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\DataWargaController;
use App\Http\Controllers\TambahDataWargaController;
use App\Http\Controllers\TambahDataPetugasController;

use Illuminate\Support\Facades\Route;




Route::get('/petugas', [PetugasController::class, 'index']);
Route::get('/tambahdatapetugas', [TambahDataPetugasController::class, 'index']);
Route::resource('petugas', PetugasController::class);
Route::post('/tambahdatapetugas', [TambahDataPetugasController::class, 'store']); // Proses simpan data petugas
Route::get('/tambahdatapetugas', [TambahDataPetugasController::class, 'show']);
Route::get('/tambahdatapetugas', [PetugasController::class, 'create'])->name('petugas.create');
Route::get('/petugas/{id}/edit', [PetugasController::class, 'edit'])->name('petugas.edit');
Route::put('/petugas/{id}', [PetugasController::class, 'update'])->name('petugas.update');


Route::get('/datalaporan', [DataLaporanController::class, 'index']);

Route::get('/laporanakhir', [LaporanAkhirController::class, 'index']);

Route::get('/landing', [LandingController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/pengguna', [PenggunaController::class, 'index']);

Route::get('/userform', [UserFormController::class, 'index']);

Route::get('/riwayatlaporanuser', [RiwayatLaporanUserController::class, 'index']);

Route::get('/admindashboard', [AdminDasboardController::class, 'index']);

Route::get('/verifikasi', [VerifikasiController::class, 'index']);

Route::get('/datawarga', [DataWargaController::class, 'index'])->name('datawarga');
Route::resource('datawarga', DataWargaController::class);
Route::get('/editdatawarga/{id}', [DataWargaController::class, 'edit'])->name('warga.edit');
Route::put('/updatewarga/{id}', [DataWargaController::class, 'update'])->name('warga.update');


Route::get('/tambahdatawarga', [TambahDataWargaController::class, 'index'])->name('tambahdatawarga');
Route::post('/tambahdatawarga', [TambahDataWargaController::class, 'store']); // Route untuk simpan data