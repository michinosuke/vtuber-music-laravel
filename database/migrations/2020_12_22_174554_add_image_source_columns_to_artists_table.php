<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageSourceColumnsToArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->string('name_original')->nullable()->after('name_ruby');
            $table->string('image_url_profile_icon_source_url')->nullable()->after('image_url_profile_header_twitter');
            $table->string('image_url_profile_header_source_url')->nullable()->after('image_url_profile_icon_source_url');
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
            $table->dropColumn('name_original');
            $table->dropColumn('image_url_profile_icon_source_url');
            $table->dropColumn('image_url_profile_header_source_url');
        });
    }
}
