<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Barang dari supplier 1 (Elektronik)
            [
                'id_kategori_kegiatan' => 1,
                'kode_kategori_kegiatan' => 'TRPGM',
                'nama_kategori_kegiatan' => 'Terprogram',
            ],
            [
                'id_kategori_kegiatan' => 2,
                'kode_kategori_kegiatan' => 'NTRPGM',
                'nama_kategori_kegiatan' => 'Non-program',
            ],
            [
                'id_kategori_kegiatan' => 3,
                'kode_kategori_kegiatan' => 'NJTI',
                'nama_kategori_kegiatan' => 'Non-JTI',
            ],
           
        ];
        DB::table('m_kategori_pengguna')->insert($data);
    }
}