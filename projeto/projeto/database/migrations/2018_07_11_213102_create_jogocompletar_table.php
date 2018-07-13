<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogocompletarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogocompletar', function (Blueprint $table) {
            $table->increments('idjogocompletar');
            $table->binary('imagem');
            $table->string('tipoimagem',30);
            $table->string('pergunta',100);
            $table->string('respCerta',20);
            $table->string('respErrada',20);
            $table->integer('versao')->unsigned();
            $table->foreign('versao')->references('codigojogo')->on('tipojogo');
            $table->integer('respCriacao')->unsigned();
            $table->foreign('respCriacao')->references('idusuario')->on('usuario');
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
        Schema::drop('jogocompletar');
    }
}
