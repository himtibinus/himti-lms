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
        Schema::table('attendants', function (Blueprint $table) {
            $table->foreign('eventID')->references('id')->on('events')->onDelete('cascade')->onDelete('cascade');
            $table->foreign('roleID')->references('id')->on('roles')->nullOnDelete();
            $table->foreign('comissionID')->references('id')->on('comissions')->nullOnDelete();
            $table->foreign('divisionID')->references('id')->on('divisions')->nullOnDelete();
            $table->foreign('regionID')->references('id')->on('regions')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendants', function (Blueprint $table) {
            $table->dropForeign('attendants_eventID_foreign');
            $table->dropForeign('attendants_roleID_foreign');
            $table->dropForeign('attendants_comissionID_foreign');
            $table->dropForeign('attendants_divisionID_foreign');
            $table->dropForeign('attendants_regionID_foreign');
        });
    }
};
