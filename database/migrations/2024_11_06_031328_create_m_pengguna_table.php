<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_pengguna', function (Blueprint $table) {
            $table->id('id_pengguna');
            $table->unsignedBigInteger('id_jenis_pengguna')->index();
            $table->string('nama_pengguna', 100);
            $table->string('username', 100);
            $table->string('password', 50);
            $table->string('email', 50);
            $table->string('foto_profil', 255)->nullable();
            $table->timestamps();

            //foreign key
            $table->foreign('id_jenis_pengguna')->references('id_jenis_pengguna')->on('m_jenis_pengguna');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_pengguna');
    }
};
