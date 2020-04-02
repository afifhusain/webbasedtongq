<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHobiSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobi_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('siswa id')->unsigned();
            $table->foreign('siswa id')
                ->references('id')->on('siswa')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->biginteger('hobi id')->unsigned();
            $table->foreign('hobi id')
                ->references('id')->on('hobi')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('hobi_siswa');
    }
}
