<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserveDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_details', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('seat_id');
            // $table->foreign('seat_id')->references('id')->on('seats');
            // $table->integer('reserve_id');
            // $table->foreign('reserve_id')->references('id')->on('reserves'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserve_details');
    }
}
