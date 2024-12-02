<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nik', 'password', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Menentukan kolom untuk login
    public function getAuthIdentifierName()
    {
        return 'nik';  // Menggunakan NIK untuk login
    }

    // Menentukan kolom password yang terenkripsi
    public function getAuthPassword()
    {
        return $this->password;
    }
}
