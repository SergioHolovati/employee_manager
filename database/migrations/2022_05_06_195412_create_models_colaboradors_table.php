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
        Schema::create('models_colaboradors', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("matricula");
            $table->string("posicao");
            $table->string("email");
            $table->string("gestor");
            $table->string("filial");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_colaboradors');
    }
};
