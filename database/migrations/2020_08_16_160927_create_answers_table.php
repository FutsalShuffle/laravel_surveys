<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->text('answer');
                $table->bigInteger('question_id')->unsigned();
                $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
                $table->bigInteger('result_id')->unsigned();
                $table->foreign('result_id')->references('id')->on('results')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
