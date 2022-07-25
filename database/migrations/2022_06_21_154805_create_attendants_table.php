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
        Schema::create('attendants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eventID');
            $table->unsignedBigInteger('roleID')->nullable();
            $table->unsignedBigInteger('comissionID')->nullable();
            $table->unsignedBigInteger('divisionID')->nullable();
            $table->unsignedBigInteger('regionID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendants');
    }
};
