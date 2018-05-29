<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesan2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesan2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('PEM_ID');
            $table->string('PEM_NAMA');
            $table->date('PEM_TGL_LAHIR');
            $table->string('PEM_ALAMAT');
            $table->string('PEM_NOTELP');
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
        Schema::dropIfExists('pemesan2');
    }
}
