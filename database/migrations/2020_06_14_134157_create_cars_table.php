<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_name')->nullable();
            $table->string('color')->nullable();
            $table->string('transmission')->nullable();
            $table->string('model')->nullable();
            $table->string('body_type')->nullable();
            $table->string('condition')->nullable();
            $table->string('interior')->nullable();
            $table->string('engine_size')->nullable();
            $table->string('fuel')->nullable();
            $table->string('mileage')->nullable();
            $table->string('duty_type')->nullable();
            $table->string('features')->nullable();
            $table->string('car_photos')->nullable();
            $table->string('location')->nullable();
            $table->integer('ads_id')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
