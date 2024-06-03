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
        Schema::create('casas', function (Blueprint $table) {
            $table->id();
            $table->string("bairro");
            $table->string("rua");
            $table->string("estado")->default("livre");
            $table->string("quintal");
            $table->string("electricidade");
            $table->string("num_quartos");
            $table->string("agua_potavel");
            $table->string("pretensao")->default("venda");
            $table->string("categoria");
            $table->foreignId('id_proprietario')->references('id')->on('proprietarios')->onDelete('CASCADE')->onUpdate('CASCADE');
            
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
        Schema::dropIfExists('casas_');
    }
};
