<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('playbook_id')->unsigned();
          $table->string('uid');
          $table->string('title');
          $table->text('description')->nullable();
          $table->integer('stat_id')->nullable();
          $table->boolean('processed')->default(false);
          $table->string('video_id')->nullable();
          $table->string('video_filename')->nullable();
          $table->enum('visibility', ['public', 'unlisted', 'private']);
          $table->boolean('allow_votes')->default(false);
          $table->boolean('allow_comments')->default(false);
          $table->integer('processed_percentage')->nullable();
          $table->softDeletes();
          $table->timestamps();

         $table->foreign('playbook_id')->references('id')->on('playbooks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
