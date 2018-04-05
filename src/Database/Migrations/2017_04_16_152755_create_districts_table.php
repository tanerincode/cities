<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('cities.tables.district', 'districts'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('countyId')->unsigned();
            $table->string('name');

            $table->foreign('countyId')->references('id')->on(config('cities.tables.county', 'counties'))->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('cities.tables.district', 'districts'));
    }
}
