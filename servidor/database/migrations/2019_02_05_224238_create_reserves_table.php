<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->increments('reserve_id');
            $table->date('fecha');
            $table->string('per_ci');
            $table->foreign('per_ci')->references('per_ci')->on('persons');
            $table->integer('travel_id');
            $table->foreign('travel_id')->references('id')->on('travels');
            $table->integer('bus_id');
            $table->foreign('bus_id')->references('id')->on('buses');
            $table->integer('seat_id');
            $table->foreign('seat_id')->references('id')->on('seats');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserves');
    }
}
