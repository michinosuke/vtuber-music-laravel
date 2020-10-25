<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoSingersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_singers', function (Blueprint $table) {
            $table->string('video_id', 31);
            $table->string('artist_id', 31);
            $table->timestamps();

            $table->primary(['video_id', 'artist_id']);
            $table->foreign('video_id')->references('id')->on('videos');
            $table->foreign('artist_id')->references('id')->on('artists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_singers');
    }
}
