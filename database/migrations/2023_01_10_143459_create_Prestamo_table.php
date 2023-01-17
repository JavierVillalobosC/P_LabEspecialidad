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
            $table->integer('ID_Prestamo')->primary();
            $table->date('fecha');
            $table->time('hora');
            $table->date('fecha_devolucion');
            $table->integer('ID')->index('ID');
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
        Schema::dropIfExists('Prestamo');
    }
};
