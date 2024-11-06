<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'id_pengguna' => 1,
                'id_jenis_pengguna' => 1,
                'nama_pengguna' => 'Sarah',
                'username' => 'Admin',
                'password'=> Hash::make('123'),
                'email' => 'sarah@gmail.com',
            ],
            [
                'id_pengguna' => 2,
                'id_jenis_pengguna' => 2,
                'nama_pengguna' => 'Dr.Eng.Rosa Andrie Asmara, ST., MT.',
                'username' => 'Pimpinan',
                'password'=> Hash::make('123'),
                'email' => 'rosandrie@gmail.com',
            ],
            [
                'id_pengguna' => 3,
                'id_jenis_pengguna' => 3,
                'nama_pengguna' => 'Widya Novy Nuraeny, A.Md.',
                'username' => 'DosenPIC1',
                'password'=> Hash::make('123'),
                'email' => 'widyanovy@gmail.com',
            ],
            [
                'id_pengguna' => 4,
                'id_jenis_pengguna' => 4,
                'nama_pengguna' => 'Lailatul Qodriyah,S.Sos.',
                'username' => 'DosenAnggota1',
                'password'=> Hash::make('123'),
                'email' => 'lailatul@gmail.com',
            ],
            [
                'id_pengguna' => 5,
                'id_jenis_pengguna' => 4,
                'nama_pengguna' => 'Dwi Atmo Nugroho, ST',
                'username' => 'DosenAnggota2',
                'password'=> Hash::make('123'),
                'email' => 'Dwi@gmail.com',
            ],
            [
                'id_pengguna' => 6,
                'id_jenis_pengguna' => 4,
                'nama_pengguna' => 'Anggi Putra Woon,A.Md.',
                'username' => 'DosenAnggota3',
                'password'=> Hash::make('123'),
                'email' => 'anggi@gmail.com',
            ],
            [
                'id_pengguna' => 7,
                'id_jenis_pengguna' => 4,
                'nama_pengguna' => 'Mariska Dwitya Adilasari, A. Md.',
                'username' => 'DosenAnggota4',
                'password'=> Hash::make('123'),
                'email' => 'mariska@gmail.com',
            ],
            [
                'id_pengguna' => 8,
                'id_jenis_pengguna' => 3,
                'nama_pengguna' => 'Dwi Atmo Nugroho, ST',
                'username' => 'DosenPIC2',
                'password'=> Hash::make('123'),
                'email' => 'Dwi@gmail.com',
            ],
        ];
        DB::table('m_pengguna')->insert($data);
        //
    }
}
