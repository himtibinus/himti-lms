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
        Schema::table('event_details', function (Blueprint $table) {
            $table->foreign('eventID')->references('id')->on('events')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('eventTypeID')->references('id')->on('event_types');
            $table->foreign('createdBy')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_details', function (Blueprint $table) {
            $table->dropForeign('event_details_eventID_foreign');
            $table->dropForeign('event_details_eventTypeID_foreign');
            $table->dropForeign('event_details_createdBy_foreign');
        });
    }
};
