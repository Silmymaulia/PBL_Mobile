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
        Schema::create('m_jenis_pengguna', function (Blueprint $table) {
            $table->id('id_jenis_pengguna');
            $table->string('kode_jenis_pengguna', 10)->unique();
            $table->string('nama_jenis_pengguna', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_jenis_pengguna');
    }
};