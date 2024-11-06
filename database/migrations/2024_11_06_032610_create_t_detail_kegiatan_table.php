<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_detail_kegiatan', function (Blueprint $table) {
            $table->id('id_detail_kegiatan');
            $table->unsignedBigInteger('id_kegiatan')->index();
            $table->unsignedBigInteger('id_kategori_kegiatan')->index();
            $table->unsignedBigInteger('id_jabatan_kegiatan')->index();
            $table->unsignedBigInteger('id_jenis_pengguna')->index();
            $table->string('keterangan', 100);
            $table->float('progres_kegiatan', 8, 2);
            $table->string('beban_kerja', 50);
            $table->timestamps();

            //foreign key
            $table->foreign('id_kegiatan')->references('id_kegiatan')->on('t_kegiatan');
            $table->foreign('id_kategori_kegiatan')->references('id_kategori_kegiatan')->on('m_kategori_kegiatan');
            $table->foreign('id_jabatan_kegiatan')->references('id_jabatan_kegiatan')->on('m_jabatan_kegiatan');
            $table->foreign('id_jenis_pengguna')->references('id_jenis_pengguna')->on('m_jenis_pengguna');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_detail_kegiatan');
    }
};
