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
        Schema::table('user_details', function (Blueprint $table) {
            $table->foreign('categoryID')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('roleID')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('regionID')->references('id')->on('regions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->dropForeign('user_details_categoryID_foreign');
            $table->dropForeign('user_details_roleID_foreign');
            $table->dropForeign('user_details_regionID_foreign');
        });
    }
};
