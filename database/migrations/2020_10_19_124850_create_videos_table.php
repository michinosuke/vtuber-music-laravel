<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->string('id', 31)->primary();
            $table->string('music_id', 31);
            $table->date('release_date')->nullable();
            $table->boolean('is_mv')->default(TRUE);
            $table->string('original_video_id', 31)->nullable();
            $table->string('custom_music_name', 255)->nullable();
            $table->timestamps();

            $table->foreign('music_id')->references('id')->on('music')
                    ->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
