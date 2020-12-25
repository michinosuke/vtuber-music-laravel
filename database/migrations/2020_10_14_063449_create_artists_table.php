<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->string('id', 31)->primary();
            $table->string('name', 255);
            $table->string('name_ruby', 255)->nullable();
            $table->string('profile', 1023)->nullable();
            $table->string('sex', 15)->nullable();
            $table->date('birthday')->nullable();
            $table->string('id_youtube')->nullable();
            $table->date('youtube_registration_date')->nullable();
            $table->string('id_twitter', 255)->nullable();
            $table->unsignedInteger('id_twitter_unique')->nullable();
            $table->string('id_instagram', 255)->nullable();
            $table->string('url_niconico', 1023)->nullable();
            $table->string('url_homepage', 1023)->nullable();
            $table->string('id_spotify', 63)->nullable();
            $table->string('id_apple_music', 127)->nullable();
            $table->unsignedInteger('id_showroom')->nullable();
            $table->string('id_openrec', 127)->nullable();
            $table->unsignedInteger('id_bilibili')->nullable();
            $table->string('id_tiktok', 127)->nullable();
            $table->string('id_twitcasting', 255)->nullable();
            $table->string('id_facebook', 255)->nullable();
            $table->unsignedInteger('id_pixiv')->nullable();
            $table->string('image_url_profile_icon_youtube')->nullable();
            $table->string('image_url_profile_icon_twitter')->nullable();
            $table->string('image_url_profile_header_youtube')->nullable();
            $table->string('image_url_profile_header_twitter')->nullable();
            $table->boolean('youtube_channel_is_user')->default(FALSE);
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
        Schema::dropIfExists('artists');
    }
}
