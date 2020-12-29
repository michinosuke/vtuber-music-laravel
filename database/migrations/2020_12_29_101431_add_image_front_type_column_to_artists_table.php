<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageFrontTypeColumnToArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->string('image_front_type_icon')->nullable()->after('image_url_profile_header_twitter');
            $table->string('image_front_type_header')->nullable()->after('image_front_type_icon');
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
            $table->dropColumn('image_front_type_icon');
            $table->dropColumn('image_front_type_header');
        });
    }
}
