<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->string('id', 31)->primary();
            $table->string('title', 255);
            $table->string('title_ruby', 255)->nullable();
            $table->string('lyrics', 4095)->nullable();
            $table->string('lyrics_url', 2047)->nullable();
            $table->string('genre', 127)->nullable();
            $table->string('original_video_youtube_id', 31)->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music');
    }
}
