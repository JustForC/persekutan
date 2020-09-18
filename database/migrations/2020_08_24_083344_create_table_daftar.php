<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDaftar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_daftar', function (Blueprint $table) {
            $table->unsignedBigInteger('npm');
            $table->foreign('npm')->references('npm')->on('mahasiswa');
            $table->unsignedBigInteger('id_matkul');
            $table->foreign('id_matkul')->references('id')->on('table_matkul');
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
        Schema::dropIfExists('table_daftar');
    }
}
