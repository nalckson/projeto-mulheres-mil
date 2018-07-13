<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('idfeedback');
            $table->string('consideracao',200);
            $table->dateTime('data');
            $table->integer('matricula')->unsigned();
            $table->foreign('matricula')->references('idusuario')->on('usuario');
            $table->integer('codigojogo')->unsigned();
            $table->foreign('codigojogo')->references('codigojogo')->on('versaojogo');
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
        Schema::drop('feedback');
    }
}
