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
            $table->foreign('eventID')->references('id')->on('events')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('roleID')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('comissionID')->references('id')->on('comissions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('divisionID')->references('id')->on('divisions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('regionID')->references('id')->on('regions')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('eventID');
            $table->unsignedBigInteger('roleID');
            $table->unsignedBigInteger('comissionID');
            $table->unsignedBigInteger('divisionID');
            $table->unsignedBigInteger('regionID');
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
