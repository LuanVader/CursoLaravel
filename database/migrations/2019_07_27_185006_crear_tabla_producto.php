<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRODUCTO', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50);
            $table->string('categoria',50);
            $table->decimal('precio',10,2);
            $table->string('cantxu',50);
            $table->decimal('stock',10,2);
            $table->boolean('estado');
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
        Schema::dropIfExists('PRODUCTO');
    }
}
