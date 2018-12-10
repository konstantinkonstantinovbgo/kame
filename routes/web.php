<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('services');

Route::get('/services', function () {
    return view('services');
})->name('services');

// Generating URLs...
//$url = route('profile');

// Generating Redirects...
//return redirect()->route('profile');


// temp
Route::get('/temp', 'TemperatureController@show')->name('temp');
Route::post('/temp', 'TemperatureController@calc')->name('temp');
