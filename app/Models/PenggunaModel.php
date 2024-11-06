<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable; // Implementasi class authenticatable
use Illuminate\Database\Eloquent\Casts\Attribute;

class PenggunaModel extends Authenticatable
{
    use HasFactory;  
    protected $table = 'm_pengguna';
    protected $primaryKey = 'id_pengguna';
    
    // Tambahkan 'photo' dalam fillable agar bisa disimpan ke database
    protected $fillable = [
        'username', 
        'password', 
        'nama_pengguna', 
        'id_jenis_penguna', 
        'email',
        'fotoprofil',//tambahan
        'created_at', 
        'updated_at', 
    ];

    protected $hidden = ['password']; // Jangan ditampilkan saat select

    protected $casts = ['password' => 'hashed']; // Casting password agar otomatis di hash

    /**
     * Relasi ke tabel level
     */
    public function jenis_pengguna(): BelongsTo
    {
        return $this->belongsTo(JenisPenggunaModel::class, 'id_jenis_pengguna', 'id_jenis_pengguna');
    }

    protected function image(): Attribute{
        return Attribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }

    /**
     * Mendapatkan nama role
     */
    public function getRoleName(): string
    {
        return $this->jenis_pengguna->nama_jenis_pengguna;
    }

    /**
     * Cek apakah user memiliki role tertentu
     */
    public function hasRole($role): bool
    {
        return $this->jenis_pengguna->jenis_pengguna_kode == $role;
    }

    /**
     * Mendapatkan kode role
     */
    public function getRole()
    {
        return $this->jenis_pengguna->kode_jenis_pengguna;
    }
}