<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions',function(Blueprint $table){
            $table->bigIncrements('id')->comment('主キー');
            $table->unsignedBigInteger('area_id')->nullable(false)->comment('外部キー');
            $table
            ->foreign('area_id') // このテーブルの外部key
            ->references('id') // 結びけるカラム名
            ->on('areas')// 結びつくテーブル
            ->onDelete('cascade'); // 親レコードが削除された時に、結びつくレコードを消す
            $table->integer('question_number')->nullable(false)->comment('問題番号');
            $table->string('img')->nullable(false)->comment('地名画像');
            $table->string('name')->nullable(false)->comment('問題文');
            $table->string('commentary')->nullable(true)->comment('解説');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
