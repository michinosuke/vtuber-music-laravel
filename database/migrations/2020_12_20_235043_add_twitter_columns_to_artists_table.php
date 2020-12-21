<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTwitterColumnsToArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->unsignedInteger('twitter_followers_count')->nullable()->after('id_pixiv');
            $table->unsignedInteger('twitter_friends_count')->nullable()->after('twitter_followers_count');
            $table->date('twitter_created_at')->nullable()->after('twitter_friends_count');
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
            $table->dropColumn('twitter_followers_count');
            $table->dropColumn('twitter_friends_count');
            $table->dropColumn('twitter_created_at');
        });
    }
}
