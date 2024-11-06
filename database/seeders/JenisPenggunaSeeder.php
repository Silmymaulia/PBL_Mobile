<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisPenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_jenis_pengguna' => 1,
                'kode_jenis_pengguna' => 'ADM',
                'nama_jenis_pengguna' => 'ADMIN',
            ],
            [
                'id_jenis_pengguna' => 2,
                'kode_jenis_pengguna' => 'PIM',
                'nama_jenis_pengguna' => 'PIMPINAN',
            ],
            [
                'id_jenis_pengguna' => 3,
                'kode_jenis_pengguna' => 'DPIC',
                'nama_jenis_pengguna' => 'DOSEN PIC',
            ],
            [
                'id_jenis_pengguna' => 4,
                'kode_jenis_pengguna' => 'DAGT',
                'nama_jenis_pengguna' => 'DOSEN ANGGOTA',
            ],
        ];

        DB::table('m_jenis_pengguna')->insert($data);
    }
}