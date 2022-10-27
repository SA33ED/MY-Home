<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('address',100);
            $table->string('area',20);
            $table->double('price_per_month');
            $table->integer('num_of_rooms')->nullable();
            $table->integer('num_of_bathrooms')->nullable();
            $table->integer('num_of_kitchen')->nullable();
            $table->integer('num_of_floors')->nullable();
            $table->integer('floors')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
