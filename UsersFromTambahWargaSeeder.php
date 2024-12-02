<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\TambahWarga; // Pastikan Anda sudah membuat model untuk tabel tambahwarga
use Illuminate\Support\Facades\Hash;

class UsersFromTambahWargaSeeder extends Seeder
{
    public function run()
    {
        // Ambil semua data warga dari tabel tambahwarga
        $wargas = TambahWarga::all();

        foreach ($wargas as $warga) {
            // Salin data ke tabel users
            User::create([
                'nik' => $warga->nik,                 // NIK untuk login
                'password' => Hash::make($warga->password), // Enkripsi password
                'role' => 'warga',                    // Role untuk warga
            ]);
        }
    }
}

