<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->increments('id_pesanan');
            $table->dateTime('waktu_pesanan');
            $table->string('status');
            $table->integer('menu')->unsigned();
            $table->foreign('menu')->references('id_menu')->on('menus')->onDelete('cascade');
            $table->integer('pemesan')->unsigned();
            $table->foreign('pemesan')->references('id_karyawan')->on('karyawans')->onDelete('cascade');
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
        Schema::dropIfExists('pesanans');
    }
}
