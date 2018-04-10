<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKoppelThemaLeefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koppel_thema_leef', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thema_id')->unsigned();
            $table->integer('leefgebied_id')->unsigned();
            $table->foreign('thema_id')->references('thema_id')->on('thema');
            $table->foreign('leefgebied_id')->references('leefgebied_id')->on('leefgebied');
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
        Schema::dropIfExists('koppel_thema_leef');
    }
}
