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
        Schema::table('controle_de_nf', function (Blueprint $table) {
            $table->string("coluna_ola_mundo", 550);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('controle_de_nf', function (Blueprint $table) {
            $table->string("coluna_ola_mundo", 550);
        });
    }
};
