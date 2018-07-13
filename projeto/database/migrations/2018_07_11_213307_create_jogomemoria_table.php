<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogomemoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogomemoria', function (Blueprint $table) {
            $table->increments('idjogomemoria');
            $table->integer('par');
            $table->string('tipoimagem',30);
            $table->binary('imagem');
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
        Schema::drop('jogomemoria');
    }
}
