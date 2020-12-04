<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_actions', function (Blueprint $table) {
            $table->string('video_id', 31);
            $table->date('since');
            $table->integer('love')->unsigned();
            $table->timestamps();

            $table->primary(['video_id', 'since']);
            $table->foreign('video_id')->references('id')->on('videos')
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
        Schema::dropIfExists('video_actions');
    }
}
