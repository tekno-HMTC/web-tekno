<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('nrp');
            $table->integer('pilihan1');
            $table->string('alasanPilihan1');
            $table->integer('pilihan2');
            $table->string('alasanPilihan2');
            $table->integer('pilihan3');
            $table->string('alasanPilihan3');
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
        Schema::dropIfExists('pendaftars');
    }
}
