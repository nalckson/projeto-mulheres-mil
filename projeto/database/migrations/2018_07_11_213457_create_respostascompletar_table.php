<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostascompletarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostascompletar', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('data');
            $table->boolean('aceros');
            $table->integer('matricula')->unsigned();
            $table->foreign('matricula')->references('idusuario')->on('usuario');
            $table->integer('codigojogo')->unsigned();
            $table->foreign('codigojogo')->references('versao')->on('jogocompletar');
            $table->integer('pergunta')->unsigned();
            $table->foreign('pergunta')->references('idjogocompletar')->on('jogocompletar');
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
        Schema::drop('respostascompletar');
    }
}
