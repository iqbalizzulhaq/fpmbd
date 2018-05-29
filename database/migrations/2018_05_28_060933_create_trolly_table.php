 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrollyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trolly', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->string('jumlah_barang');
            $table->string('tipe_bahan');
            $table->string('desain');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->string('address');
            $table->string('bank');
            $table->string('no_rekening');
            $table->string('nama');
            $table->string('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trolly');
    }
}
