<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNounAdjectiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adjective_noun', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('noun_id')->unsigned();
            $table->integer('adjective_id')->unsigned();

            $table->foreign('noun_id')->references('id')->on('nouns');
            $table->foreign('adjective_id')->references('id')->on('adjectives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adjective_noun');
    }
}
