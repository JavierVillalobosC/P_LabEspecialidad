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
        Schema::create('Redes materiales', function (Blueprint $table) {
            $table->comment('');
            $table->integer('ID_Redesm')->primary();
            $table->integer('item');
            $table->integer('cantidad');
            $table->string('descripcion', 800);
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
        Schema::dropIfExists('Redes materiales');
    }
};
