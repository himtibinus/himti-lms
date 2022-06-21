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
        Schema::create('content_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contentID');
            $table->unsignedBigInteger('typeID');
            $table->unsignedBigInteger('imageID')->nullable();
            $table->string('field2')->nullable();
            $table->string('field1')->nullable();
            $table->string('field3')->nullable();
            $table->string('field4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_details');
    }
};
