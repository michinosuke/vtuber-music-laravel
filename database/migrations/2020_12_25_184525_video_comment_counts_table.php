<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VideoCommentCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_comment_counts', function (Blueprint $table) {
            $table->string('id', 31);
            $table->dateTime('created_at')->useCurrent();
            $table->integer('comment_count');

            $table->primary(['id', 'created_at']);

            $table->foreign('id')->references('id')->on('videos')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_comment_counts');
    }
}
