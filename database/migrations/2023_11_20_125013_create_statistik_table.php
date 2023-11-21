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
        Schema::create('Statistik', function (Blueprint $table) {
            $table->id();
            $table->string('punggung');
            $table->string('posisi');
            $table->string('nama_pemain');
            $table->string('penampilan');
            $table->string('gol');
            $table->string('assists');
            $table->string('kartu_kuning');
            $table->string('kartu_merah');
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
        Schema::dropIfExists('Statistik');
    }
};
