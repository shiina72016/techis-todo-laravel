<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
       * Run the migrations.
       *
       * @return void
       */
    public function up() //新しいテーブルを追加する
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id'); //タスクID
            $table->integer('user_id')->unsigned()->index(); //ユーザーのテーブルと紐づくユーザーID
            $table->string('name'); //タスクの名前
            $table->timestamps(); //作成・更新日時
        });
    }

    /**
       * Reverse the migrations.
       *
       * @return void
       */
    public function down() //upをもとにもどす
    {
        Schema::dropIfExists('tasks');
    }
}