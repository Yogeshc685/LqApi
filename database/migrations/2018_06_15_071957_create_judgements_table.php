<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudgementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judgements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Petitioner');
            $table->string('Responder');
            $table->integer('CaseYear');
            $table->string('DateOfJudgement');
              $table->integer('CaseNo');
              $table->string('Citation');
              $table->integer('CaseId');
              $table->integer('CourtId');
              $table->text('Judgement');
              $table->text('ArgumentsOfPetitioner');
              $table->text('ArgumentsOfResponder');
              $table->text('Reasoning');
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
        Schema::dropIfExists('judgements');
    }
}
