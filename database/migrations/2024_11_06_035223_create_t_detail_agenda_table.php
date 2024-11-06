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
        Schema::create('t_detail_agenda', function (Blueprint $table) {
            $table->id('id_detail_agenda');
            $table->unsignedBigInteger('id_agenda')->index();
            $table->string('dokumen', 100);
            $table->float('progres_agenda', 8, 2);
            $table->string('keterangan', 100);
            $table->string('berkas', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_detail_agenda');
    }
};
