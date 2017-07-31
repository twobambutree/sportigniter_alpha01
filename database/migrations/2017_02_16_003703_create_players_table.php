<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('playbook_id')->unsigned();
            $table->string('sport')->nullable();
            $table->string('team')->nullable();
            $table->string('position')->nullable();
            $table->integer('jersey')->nullable();
            $table->string('coach')->nullable();
            $table->string('other')->nullable();
            $table->string('about')->nullable();
            $table->timestamps();

            $table->foreign('playbook_id')
                  ->references('id')
                  ->on('playbooks')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
