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
        Schema::create('arrendamentos', function (Blueprint $table) {
            $table->id();
            $table->date("data");
            $table->integer("duracao");
            $table->foreignId('id_casa')->references('id')->on('casas')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('id_usuario')->references('id')->on('usuarios')->onDelete('CASCADE')->onUpdate('CASCADE');
            
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
        Schema::dropIfExists('arrendamentos');
    }
};
