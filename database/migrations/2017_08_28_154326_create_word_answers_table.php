<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('word_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('word_id')->unsigned()->index();
            $table->string('content');
            $table->tinyInteger('correct');
            $table->timestamps();

            $table->foreign('word_id')
                ->references('id')->on('words')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('word_answers');
    }
}
