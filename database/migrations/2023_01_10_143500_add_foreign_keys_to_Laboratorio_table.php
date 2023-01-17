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
        Schema::table('Laboratorio', function (Blueprint $table) {
            $table->foreign(['user_id'], 'Laboratorio_ibfk_1')->references(['user_id'])->on('Administrador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Laboratorio', function (Blueprint $table) {
            $table->dropForeign('Laboratorio_ibfk_1');
        });
    }
};
