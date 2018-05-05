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

Route::get('/', function () {
    return view('webpage');
});


Route::middleware('auth')->group(function(){
    //Route::resource('/admin/new', MahdiController);
    /**
     * this route for testing and debagging of migration
     */
    Route::resource('/admin/safari','SafariController');

    /**
     * route open the view page of admin/ enter new job .
     */
    Route::resource('/admin','JobAnnounceController');
    Route::get('/admin/{id}/delete','JobAnnounceController@destroy');
    Route::resource('/car','CarController');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




