<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Loaisanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('loaisanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenloai');
            $table->string('slug')->unique();
            $table->text('mota')->nullable();
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
        Schema::dropIfExists('loaisanpham');
    }
}
