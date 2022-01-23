<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('choices', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('主キー');
            $table->unsignedBigInteger('question_id')->foreign('question_id')->references('id')->on('questions')->onDelete('cascade')->comment('外部キー');
            $table->string('name')->nullable(false)->comment('選択肢の名称');
            $table->boolean('valid')->nullable(false)->comment('正誤判定');
        });
    

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('choices');
    }
}
