<?php

Route::get("cities", "TanerInCode\Cities\Controllers\CitiesController@index");
Route::get("cities/code", "TanerInCode\Cities\Controllers\CitiesController@getCode");
Route::get("cities/code/{code}", "TanerInCode\Cities\Controllers\CitiesController@getCode");