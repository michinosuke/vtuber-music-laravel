<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_videos', function (Blueprint $table) {
            $table->string('id', 31);
            $table->integer('stage')->unsigned();
            $table->text('content');
            $table->string('contributor_twitter_id', 16)->nullable();
            $table->boolean('is_done')->default(FALSE);
            $table->boolean('is_issue')->default(FALSE);

            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_videos');
    }
}
