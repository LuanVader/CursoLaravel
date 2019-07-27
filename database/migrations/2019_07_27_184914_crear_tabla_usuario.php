<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('USUARIO', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('user',20);
            $table->string('password',20);
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('USUARIO');
    }
}
