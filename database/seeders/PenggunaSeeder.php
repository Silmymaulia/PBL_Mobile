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
                'password'=> Hash::make('123456'),
                'email' => 'sarah@gmail.com',
            ],
            [
                'id_pengguna' => 2,
                'id_jenis_pengguna' => 2,
                'nama_pengguna' => 'Dr.Eng.Rosa Andrie Asmara, ST., MT.',
                'username' => 'Pimpinan',
                'password'=> Hash::make('1234567'),
                'email' => 'rosandrie@gmail.com',
            ],
            [
                'id_pengguna' => 3,
                'id_jenis_pengguna' => 3,
                'nama_pengguna' => 'Widya Novy Nuraeny, A.Md.',
                'username' => 'DosenPIC1',
                'password'=> Hash::make('12345678'),
                'email' => 'widyanovy@gmail.com',
            ],
            [
                'id_pengguna' => 4,
                'id_jenis_pengguna' => 4,
                'nama_pengguna' => 'Lailatul Qodriyah,S.Sos.',
                'username' => 'DosenAnggota1',
                'password'=> Hash::make('12345678'),
                'email' => 'lailatul@gmail.com',
            ],
        ];
        DB::table('m_pengguna')->insert($data);
        //
    }
}
