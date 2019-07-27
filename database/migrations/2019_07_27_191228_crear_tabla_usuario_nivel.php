<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioNivel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('USER_NIVEL', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('id')->on('USUARIO');
            $table->unsignedBigInteger('idNivel');
            $table->foreign('idNivel')->references('id')->on('NIVEL');
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
        Schema::dropIfExists('USER_NIVEL');
    }
}
