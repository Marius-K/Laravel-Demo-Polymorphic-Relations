<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCommentsTable extends Migration
{
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->unsignedInteger('post_id')->nullable();
            $table->foreign('post_id', 'post_fk_990816')->references('id')->on('posts');
            $table->unsignedInteger('video_id')->nullable();
            $table->foreign('video_id', 'video_fk_990817')->references('id')->on('videos');
        });
    }
}
