<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_details', function (Blueprint $table) {
            $table->id();
            $table->integer('offer');
            $table->boolean('moderated')->default(0);

            $table->text('info_details')->nullable();
            $table->text('age_category')->nullable();
            $table->text('gender')->nullable();
            $table->text('countries')->nullable();
            $table->text('details_product')->nullable();
            $table->string('accept_money')->default('usd');
            $table->text('help_methods')->nullable();
            $table->text('advantage_product')->nullable();
            $table->string('accept_traffic')->nullable();
            $table->string('reject_traffic')->nullable();

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
        Schema::dropIfExists('offer_details');
    }
}
