<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->foreignId('type_id')->after('id')->index()->default(1);
            $table->foreign('type_id')->references('id')->on('types')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }


    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('type_id');

        });
    }
};
