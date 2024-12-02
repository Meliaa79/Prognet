<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambahWarga extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari nama model (untuk kasus ini tabel 'tambahwarga')
    protected $table = 'tambahwarga';

    // Tentukan kolom-kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nama', 
        'nik', 
        'telepon', 
        'password',
    ];

    // Opsional: Tentukan apakah kolom timestamps (created_at, updated_at) digunakan
    public $timestamps = true;
}
