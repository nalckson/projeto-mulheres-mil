<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersaojogoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('versaojogo', function (Blueprint $table) {
            $table->increments('codigojogo');
            $table->string('descricao',100);
            $table->string('observacao',100);
            $table->integer('tipojogo')->unsigned();
            $table->foreign('tipojogo')->references('codigojogo')->on('tipojogo');
            $table->integer('usuario')->unsigned();
            $table->foreign('usuario')->references('idusuario')->on('usuario');
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
        Schema::drop('versaojogo');
    }
}
