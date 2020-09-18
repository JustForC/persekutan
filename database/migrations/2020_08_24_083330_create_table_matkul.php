<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMatkul extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_matkul', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nip');
            $table->foreign('nip')->references('nip')->on('dosen');
            $table->string('nama_matkul');
            $table->integer('sks');
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
        Schema::dropIfExists('table_matkul');
    }
}
