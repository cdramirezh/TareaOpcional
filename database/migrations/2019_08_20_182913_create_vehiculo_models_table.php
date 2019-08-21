<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('placa')->unique();
            $table->integer('duenho');
            $table->foreign('duenho')->references('cedula')->on('persona_models');
            $table->string('marca');
            $table->foreign('marca')->references('nombre_marca')->on('marca_models');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculo_models');
    }
}
