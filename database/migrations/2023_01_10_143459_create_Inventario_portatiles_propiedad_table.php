<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Inventario portatiles propiedad', function (Blueprint $table) {
            $table->comment('');
            $table->integer('ID_Portatilesp')->primary();
            $table->string('Tag', 200);
            $table->string('Modelo', 200);
            $table->integer('Inventario');
            $table->string('Especificaciones', 200);
            $table->string('Carrera', 200);
            $table->string('Estado', 200);
            $table->bigInteger('user_id')->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Inventario portatiles propiedad');
    }
};
