<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsCommentsTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //文章
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('作者');
            $table->string('content')->comment('文章內容');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        /** 評論 */
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('發文者');
            $table->string('content')->comment('評論內容');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;

        });

        /** 建立用戶 文章 評論關聯 */
        Schema::create('comment_post', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('post_id')->comment('發文者Id');
            $table->foreign('post_id')->references('id')->on('posts');
            $table->unsignedInteger('comment_id')->comment('評論Id');
            $table->foreign('comment_id')->references('id')->on('comments');
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
        //
        Schema::dropIfExists('comments');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('posts_comments');
    }
}
