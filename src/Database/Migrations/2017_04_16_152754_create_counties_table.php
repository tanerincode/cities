<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('cities.tables.county', 'counties'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cityId')->unsigned();
            $table->string('name');

            $table->foreign('cityId')->references('id')->on(config('cities.tables.city', 'cities'))->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('cities.tables.county', 'counties'));
    }
}
