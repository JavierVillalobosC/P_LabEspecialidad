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
        Schema::table('otros', function (Blueprint $table) {
            $table->foreign(['user_id'], 'otros_ibfk_1')->references(['user_id'])->on('Administrador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('otros', function (Blueprint $table) {
            $table->dropForeign('otros_ibfk_1');
        });
    }
};
