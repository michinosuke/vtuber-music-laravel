<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_actions', function (Blueprint $table) {
            $table->string('artist_id', 31);
            $table->date('since');
            $table->integer('love')->unsigned();
            $table->timestamps();

            $table->primary(['artist_id', 'since']);
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
        Schema::dropIfExists('artist_actions');
    }
}
