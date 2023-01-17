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
        Schema::create('Redes Dispositivos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('ID_Redesd')->primary();
            $table->integer('Numero');
            $table->string('dispositivo', 200);
            $table->string('Nro Inventario', 100);
            $table->string('Codigo bien', 100);
            $table->integer('cantidad');
            $table->string('comentarios', 800);
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
        Schema::dropIfExists('Redes Dispositivos');
    }
};
