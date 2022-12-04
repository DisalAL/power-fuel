<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->dateTime('scheduled_time');
            $table->enum('status',['PENDING','COMPLETED','INCOMPLETE']);
            $table->boolean('paid');
            $table->unsignedBigInteger('vehicle_id');
            $table->unsignedBigInteger('fuel_station_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreign('fuel_station_id')->references('id')->on('fuel_stations');
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
        Schema::dropIfExists('orders');
    }
};
