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
        Schema::table('Inventario Arduino', function (Blueprint $table) {
            $table->foreign(['user_id'], 'Inventario Arduino_ibfk_1')->references(['user_id'])->on('Administrador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Inventario Arduino', function (Blueprint $table) {
            $table->dropForeign('Inventario Arduino_ibfk_1');
        });
    }
};
