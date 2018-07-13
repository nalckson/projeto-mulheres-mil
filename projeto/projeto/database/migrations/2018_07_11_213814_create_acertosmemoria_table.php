<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcertosmemoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acertosmemoria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acertos');
            $table->integer('erros');
            $table->integer('pontuacao');
            $table->dateTime('data');
            $table->integer('matricula')->unsigned();
            $table->foreign('matricula')->references('idusuario')->on('usuario');
            $table->integer('codigoJogo')->unsigned();
            $table->foreign('codigoJogo')->references('versao')->on('jogomemoria');
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
        Schema::drop('acertosmemoria');
    }
}
