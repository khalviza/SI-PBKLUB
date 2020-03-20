<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogbookAnalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logbook_analis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nama_bahan');
            $table->float('jumlah');
            $table->unsignedInteger('nama_pengguna');
            $table->timestamps();

            $table->foreign('nama_bahan')->references('id')->on('bahan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jumlah')->references('id')->on('bahan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('nama_pengguna')->references('id')->on('analis')->onUpdate('cascade')->onDelete('cascade');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logbook_analis');
    }
}
