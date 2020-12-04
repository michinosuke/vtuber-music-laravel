<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoOffVocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_off_vocals', function (Blueprint $table) {
            $table->string('video_id', 31);
            $table->string('artist_id', 31);
            $table->timestamps();

            $table->primary(['video_id', 'artist_id']);
            $table->foreign('video_id')->references('id')->on('videos')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('artist_id')->references('id')->on('artists')
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
        Schema::dropIfExists('video_off_vocals');
    }
}
