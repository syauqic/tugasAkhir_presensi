<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->foreignId('id_makul');
            $table->foreignId('id_sesi');
            $table->foreignId('id_dosen');
            $table->foreignId('id_mahasiswa');
            $table->foreignId('id_prodi');
            $table->foreignId('id_kelas');
            $table->foreignId('id_ruang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
};
