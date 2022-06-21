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
            $table->string('field1');
            $table->string('field2');
            $table->string('field3');
            $table->string('field4');
            $table->unsignedBigInteger('imageID');
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
