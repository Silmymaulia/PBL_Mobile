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
        Schema::create('t_agenda', function (Blueprint $table) {
            $table->id('id_agenda');
            $table->string('kode_agenda', 10)->unique();
            $table->string('nama_agenda', 100);
            $table->unsignedBigInteger('id_kegiatan')->index();
            $table->string('tempat_agenda', 100);
            $table->unsignedBigInteger('id_jenis_pengguna')->index();
            $table->unsignedBigInteger('id_jabatan_kegiatan')->index();
            $table->float('bobot_anggota', 8, 2);
            $table->string('deskripsi', 100);
            $table->dateTime('tanggal_agenda');
            $table->timestamps();

            //foreign key
            $table->foreign('id_kegiatan')->references('id_kegiatan')->on('t_kegiatan');
            $table->foreign('id_jenis_pengguna')->references('id_jenis_pengguna')->on('m_jenis_pengguna');
            $table->foreign('id_jabatan_kegiatan')->references('id_jabatan_kegiatan')->on('m_jabatan_kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_agenda');
    }
};
