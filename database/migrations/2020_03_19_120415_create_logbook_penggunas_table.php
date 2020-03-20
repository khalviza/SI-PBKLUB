<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogbookPenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logbook_penggunas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_bahan')->nullable();
            $table->unsignedInteger('nama')->nullable();
            $table->unsignedInteger('jumlah')->nullable();
            $table->unsignedInteger('nama_pengguna')->nullable();
            $table->timestamps();
            
            $table->foreign('id_bahan')->references('id')->on('bahan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('nama')->references('id')->on('bahan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jumlah')->references('id')->on('bahan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('nama_pengguna')->references('id')->on('penggunas')->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logbook_penggunas');
    }
}
