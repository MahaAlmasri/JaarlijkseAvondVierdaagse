<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateschoolDeelnemersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolDeelnemers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->string('email');
            $table->integer('aantal lopers');
            $table->integer('afstand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schoolDeelnemers');
    }
}
