<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OffersCreative extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers_creatives', function (Blueprint $table) {
            $table->id();

            $table->integer("offer");
            $table->string("type", 256);
            $table->text("title")->nullable();
            $table->string("img", 350)->nullable();
            $table->string("url", 350)->nullable();

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
        Schema::dropIfExists('offers_creatives');
    }
}
