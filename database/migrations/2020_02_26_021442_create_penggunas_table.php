<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->increments('id');
            // $table->unsignedInteger('bahan');
            // $table->unsignedInteger('jumlah');
            $table->string('nama',50);
            $table->string('username',50);
            $table->string('email');
            $table->string('nomorhp');
            $table->enum('pendidikan',['SMA','D3','D4','S1','S2','S3']);
            $table->string('instansi');
            $table->string('profil')->nullable();
            $table->string('password');
            $table->timestamps();

            // $table->foreign('bahan')->references('id')->on('bahan');
            // $table->foreign('jumlah')->references('id')->on('bahan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penggunas');
    }
}
