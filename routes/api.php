<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('zipcodes/{zipcode}','Api\ZipCodeController@searchZipCode');
