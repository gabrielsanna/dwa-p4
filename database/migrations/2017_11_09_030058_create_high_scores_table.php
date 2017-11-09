<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHighScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up() 
    {

    Schema::create('high_scores', function (Blueprint $table) {
        $table->increments('id');
        $table->timestamps();

        # The rest of the fields...
        $table->string('name');
        $table->string('class');
        $table->integer('score');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('high_scores');
    }
}
