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

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        Route::get('/', function () {
            return view('/frontend/home');
        })->name('home');

        Route::get('/services', function () {
            return view('/frontend/services');
        })->name('services');

        Route::get('/projects', function () {
            return view('/frontend/projects');
        })->name('projects');

        Route::get('/about', function () {
            return view('/frontend/about');
        })->name('about');

        Route::get('/contact', function () {
            return view('/frontend/contact');
        })->name('contact');

        Route::post('/send-email', 'MailController@htmlEmail')->name('send-email');
    });

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
