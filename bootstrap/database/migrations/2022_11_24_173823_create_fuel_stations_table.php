<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_stations', function (Blueprint $table) {
            $table->id();
            $table->integer('stock');
            $table->string('location');
            $table->dateTime('fuel_arrival_date');
            $table->unsignedBigInteger('manager_id');
            $table->unsignedBigInteger('head_office_id');
            $table->foreign('manager_id')->references('id')->on('managers');
            $table->foreign('head_office_id')->references('id')->on('head_offices');
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
        Schema::dropIfExists('fuel_stations');
    }
};
