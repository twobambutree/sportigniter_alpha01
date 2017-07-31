<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('playbook_id')->unsigned();
            $table->string('school')->nullable();
            $table->string('graduation')->nullable();
            $table->string('town')->nullable();
            $table->string('gpa')->nullable();
            $table->string('sat')->nullable();
            $table->string('act')->nullable();
            $table->string('volunteer')->nullable();
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
        Schema::dropIfExists('education');
    }
}
