<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawai2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('PEG_ID');
            $table->string('PEG_NAMA');
            $table->date('PEG_TGL_LAHIR');
            $table->string('PEG_ALAMAT');
            $table->string('PEG_NOTELP');
            $table->string('PEG_BAGIAN');
            $table->timestamps();
            $table->string('STATUS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai2');
    }
}
