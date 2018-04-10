<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblematiekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problematiek', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('organisatie_id')->unsigned();
            $table->integer('thema_id')->unsigned();
            $table->foreign('organisatie_id')->references('organisatie_id')->on('organisatie');
            $table->foreign('thema_id')->references('thema_id')->on('thema');
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
        Schema::dropIfExists('problematiek');
    }
}
