<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('national_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
