<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistRecommendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_recommends', function (Blueprint $table) {
            $table->string('artist_id', 31);
            $table->string('recommended_artist_id', 31);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->primary(['artist_id', 'recommended_artist_id']);
            $table->foreign('artist_id')->references('id')->on('artists')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('recommended_artist_id')->references('id')->on('artists')
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
        Schema::dropIfExists('artist_recommends');
    }
}
