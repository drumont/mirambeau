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
    return view('welcome');
});

Route::get('/hebergement', 'HebergementController@index');

Route::get('/restauration', 'RestaurationController@index');

Route::get('/salles', 'SallesController@index');

Route::get('/services', 'ServicesController@index');

Route::get('/reservation', 'ReservationController@index');

Route::get('/suite', 'SuiteController@index');

Route::get('/privilege', 'PrivilegeController@index');

Route::get('/standard', 'StandardController@index');