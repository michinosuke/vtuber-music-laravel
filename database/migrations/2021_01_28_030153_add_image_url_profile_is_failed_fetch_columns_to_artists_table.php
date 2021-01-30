<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageUrlProfileIsFailedFetchColumnsToArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->boolean('is_failed_fetch_twitter_info')->default(False)->after('id_twitter_unique');
            $table->boolean('image_url_profile_icon_youtube_is_failed_fetch')->default(False)->after('image_url_profile_icon_youtube');
            $table->boolean('image_url_profile_icon_twitter_is_failed_fetch')->default(False)->after('image_url_profile_icon_twitter');
            $table->boolean('image_url_profile_header_youtube_is_failed_fetch')->default(False)->after('image_url_profile_header_youtube');
            $table->boolean('image_url_profile_header_twitter_is_failed_fetch')->default(False)->after('image_url_profile_header_twitter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->dropColumn('is_failed_fetch_twitter_info');
            $table->dropColumn('image_url_profile_icon_youtube_is_failed_fetch');
            $table->dropColumn('image_url_profile_icon_twitter_is_failed_fetch');
            $table->dropColumn('image_url_profile_header_youtube_is_failed_fetch');
            $table->dropColumn('image_url_profile_header_twitter_is_failed_fetch');
        });
    }
}
