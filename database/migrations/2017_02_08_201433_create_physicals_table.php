<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physicals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('playbook_id')->unsigned();
            $table->string('dob')->nullable();
            $table->string('height_ft')->nullable();
            $table->string('height_in')->nullable();
            $table->string('weight')->nullable();
            $table->string('gender')->nullable();
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
        Schema::dropIfExists('physicals');
    }
}
