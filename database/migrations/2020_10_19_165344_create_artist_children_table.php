<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_children', function (Blueprint $table) {
            $table->string('parent_id', 31);
            $table->string('child_id', 31);
            $table->timestamps();

            $table->primary(['parent_id', 'child_id']);
            $table->foreign('parent_id')->references('id')->on('artists')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('child_id')->references('id')->on('artists')
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
        Schema::dropIfExists('artist_children');
    }
}
