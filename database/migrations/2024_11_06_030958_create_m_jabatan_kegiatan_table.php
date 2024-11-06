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
        Schema::create('m_jabatan_kegiatan', function (Blueprint $table) {
            $table->id('id_jabatan_kegiatan');
            $table->string('kode_jabatan_kegiatan', 10)->unique();
            $table->string('nama_jabatan_kegiatan', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_jabatan_kegiatan');
    }
};
