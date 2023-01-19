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
        Schema::create('Laboratorio', function (Blueprint $table) {
            $table->comment('');
            $table->integer('ID_Laboratorio')->primary();
            $table->integer('cantidad');
            $table->string('dispositivo', 500);
            $table->string('modelo', 500);
            $table->string('inventario', 500);
            $table->string('accesorios', 500);
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
        Schema::dropIfExists('Laboratorio');
    }
};
