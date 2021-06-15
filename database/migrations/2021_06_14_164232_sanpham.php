<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tensanpham');
            $table->string('slug')->unique();
            $table->double('gia');
            $table->double('gia_km');
            $table->text('mota')->nullable();
            $table->string('hinhanh');
            $table->string('baohanh');
            $table->text('thongso');
            $table->date('ngaytao')->nullable();
            $table->boolean('enabled')->default(false);
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
        //
        Schema::dropIfExists('sanpham');
    }
}
