<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicLyricistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_lyricists', function (Blueprint $table) {
            $table->string('music_id', 31);
            $table->string('artist_id', 31);
            $table->timestamps();

            $table->primary(['music_id', 'artist_id']);
            $table->foreign('music_id')->references('id')->on('music');
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
        Schema::dropIfExists('music_lyricists');
    }
}