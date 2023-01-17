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
        Schema::table('ArquitecturaDigitales', function (Blueprint $table) {
            $table->foreign(['user_id'], 'ArquitecturaDigitales_ibfk_1')->references(['user_id'])->on('Administrador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ArquitecturaDigitales', function (Blueprint $table) {
            $table->dropForeign('ArquitecturaDigitales_ibfk_1');
        });
    }
};
