<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('idusuario');
            $table->string('nome',50);
            $table->string('email',50);
            $table->string('senha',50);
            $table->integer('matricula')->unique();
            $table->integer('telefone');
            $table->integer('tipousuario')->unsigned();
            $table->foreign('tipousuario')->references('codigo')->on('tipousuario');
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
        Schema::drop('usuario');
    }
}
