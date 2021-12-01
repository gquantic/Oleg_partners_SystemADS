<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OfferConnectRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connect_requests', function (Blueprint $table) {
            $table->id();

            $table->integer('user');
            $table->integer('offer');
            $table->integer('access'); // -1 - rejected; 0 - moderation; 1 - approved;
            $table->string('link_name',255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('connect_requests');
    }
}
