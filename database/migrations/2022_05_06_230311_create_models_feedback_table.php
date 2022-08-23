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
        Schema::create('models_feedback', function (Blueprint $table) {
            
            $table->id();
            $table->string("gestor_id");
            $table->string("colaborador_id");
            $table->string("assunto");
            $table->string("nota");
            $table->string("comentario");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_feedback');
    }
};
