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
        Schema::table('Prestamo', function (Blueprint $table) {
            $table->foreign(['user_id'], 'Prestamo_ibfk_1')->references(['user_id'])->on('Administrador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ID'], 'Prestamo_ibfk_2')->references(['ID'])->on('Usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Prestamo', function (Blueprint $table) {
            $table->dropForeign('Prestamo_ibfk_1');
            $table->dropForeign('Prestamo_ibfk_2');
        });
    }
};
