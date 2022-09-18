<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('like');
            $table->text('content');
            $table->unsignedBigInteger('user');
            $table->unsignedInteger('post_id');

            $table->timestamp('deleted_at');
            $table->timestamps();

            $table->foreign('user')
                ->references('id')
                ->on('users');


            $table->foreign('post_id')
                ->references('id')
                ->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
