<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftarMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 255);
            $table->string('nrp', 10)->unique();
            $table->smallInteger('pilihan_satu');
            $table->text('alasan_pilihan_satu');
            $table->smallInteger('pilihan_dua');
            $table->text('alasan_pilihan_dua');
            $table->smallInteger('pilihan_tiga');
            $table->text('alasan_pilihan_tiga');
            $table->string('file_foto', 255);
            $table->string('file_cv', 255);
            $table->string('file_mbti', 255);
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
        Schema::dropIfExists('pendaftar');
    }
}
