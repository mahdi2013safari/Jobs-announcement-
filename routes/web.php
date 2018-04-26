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



//Route::resource('/admin/new', MahdiController);
/**
 * this route for testing and debagging of migration
 */
Route::resource('/admin/safari','SafariController');

/**
 * route open the view page of admin/ enter new job .
 */
Route::resource('/admin','JobAnnounceController');


//Route::get('/admin/display-data', 'JobAnnounceController@index');

