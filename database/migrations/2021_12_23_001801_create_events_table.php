<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('nome_professor');
            $table->text('descricao');
            $table->integer('max_alunos');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->unsignedBigInteger('fk_user_event');
            $table->timestamps();

            $table->foreign('fk_user_event')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
