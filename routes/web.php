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

use App\Http\Controllers\MahdiController;

Route::get('/', 'LandingPage@index');
Route::get('/result-search/{name}', 'LandingPage@show');

Route::middleware('auth')->group(function(){
    /**
     * route open the view page of admin/ enter new job .
     */
    Route::resource('/admin','JobAnnounceController');
    Route::get('/admin/{id}/delete','JobAnnounceController@destroy');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




