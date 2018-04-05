<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeighborhoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('cities.tables.neighborhood', 'neighborhoods'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('districtId')->unsigned();
            $table->string('name');
            $table->string('pk');

            $table->foreign('districtId')->references('id')->on(config('cities.tables.district', 'districts'))->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('cities.tables.neighborhood', 'neighborhoods'));
    }
}
