<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->integer('author');

            $table->text('image');
            $table->text('title');
            $table->text('url');
            $table->text('type');
            $table->longText('description');
            $table->text('author_telegram');

            $table->text('action');
            $table->text('action_description');
            $table->text('currency');
            $table->integer('sale_percent');
            $table->float('price_min');
            $table->float('price_max');
            $table->integer('daily_sales');
            $table->text('traffic_url');

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
        Schema::dropIfExists('offers');
    }
}
