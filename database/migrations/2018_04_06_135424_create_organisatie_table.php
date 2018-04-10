<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisatieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisatie', function (Blueprint $table) {
            $table->increments('organisatie_id');
            $table->string('naam');
            $table->string('adres');
            $table->string('contactpersoon');
            $table->string('gemeente');
            $table->string('telefoonnummer');
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
        Schema::dropIfExists('organisatie');
    }
}
