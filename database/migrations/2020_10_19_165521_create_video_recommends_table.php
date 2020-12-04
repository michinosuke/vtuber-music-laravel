<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoRecommendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_recommends', function (Blueprint $table) {
            $table->string('video_id', 31);
            $table->string('recommended_video_id', 31);
            $table->timestamps();

            $table->primary(['video_id', 'recommended_video_id']);
            $table->foreign('video_id')->references('id')->on('videos')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('recommended_video_id')->references('id')->on('videos')
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
        Schema::dropIfExists('video_recommends');
    }
}
