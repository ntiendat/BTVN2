<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaisanphamSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaisanpham_sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_loaisanpham')->unsigned();
            $table->integer('id_sanpham')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaisanpham_sanpham');
    }
}
