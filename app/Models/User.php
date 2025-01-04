<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Admin\KelolaDokter;
use App\Models\Pasien\DaftarPoli;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'pasien';

    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'no_hp',
        'no_ktp',
        'no_rm',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function daftarPoli()
    {
        return $this->hasMany(DaftarPoli::class, 'id_pasien');
    }

    public function dokter()
    {
        return $this->hasOne(KelolaDokter::class, 'email', 'email'); // Hubungkan berdasarkan email
    }
}
