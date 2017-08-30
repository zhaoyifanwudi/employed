<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false)->unique()->comment('名字');
            $table->string('sex')->nullable(false)->comment('性别');
            $table->string('qq')->nullable(false)->comment('QQ号');
            $table->string('phone')->nullable(false)->comment('手机号');
            $table->string('college')->nullable(false)->comment('学院');
            $table->string('specialty')->nullable(false)->comment('专业班级');
            $table->string('aspiration_one')->nullable(false)->comment('第一志愿');
            $table->string('aspiration_two')->comment('第二志愿');
            $table->string('brief')->comment('简介');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
