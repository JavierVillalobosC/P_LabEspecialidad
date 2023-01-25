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
        Schema::create('Prestamo', function (Blueprint $table) {
            $table->comment('');
            $table->integer('ID_Prestamo', true);
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->date('fecha_devolucion')->nullable();
            $table->timestamps();
            $table->bigInteger('user_id')->index('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Prestamo');
    }
};