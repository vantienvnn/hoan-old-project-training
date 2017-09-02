<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearnedWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learned_words', function (Blueprint $table) {
            $table->integer('lesson_id')->unsigned()->index();
            $table->integer('word_id')->unsigned()->index();
            $table->integer('word_answer_id')->unsigned()->index();
            $table->smallInteger('learned_time');
            $table->timestamps();
            $table->primary(['lesson_id', 'word_id']);

            $table->foreign('word_id')
                ->references('id')->on('words')
                ->onDelete('cascade');
            $table->foreign('word_answer_id')
                ->references('id')->on('word_answers')
                ->onDelete('cascade');
            $table->foreign('lesson_id')
                ->references('id')->on('lessons')
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
        Schema::dropIfExists('learned_words');
    }
}
