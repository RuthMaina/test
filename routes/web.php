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

//Route::get('/', function () {
//    return view('welcome');
//});

// Index page
Route::get('/', function () {
    return view('Ruth.home');
});

// Student page
Route::get('/student', 'studentController@show');

// Student page
Route::post('/search', 'feesController@show');

Route::get('/searchPage', 'feesController@index');

// Fees page
Route::get('/fees', 'feesController@totalFees');

// Saves student information
Route::post('student/store', 'studentController@store');

// Saves fees information
Route::post('fees/store', 'feesController@store');
