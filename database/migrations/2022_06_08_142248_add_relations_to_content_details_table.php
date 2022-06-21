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
        Schema::table('content_details', function (Blueprint $table) {
            $table->foreign('contentID')->references('id')->on('contents')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('imageID')->references('id')->on('pictures')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('content_details', function (Blueprint $table) {
            $table->dropForeign('content_details_contentID_foreign');
            $table->dropForeign('content_details_imageID_foreign');
        });
    }
};
