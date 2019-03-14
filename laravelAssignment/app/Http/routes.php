<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('user', function() {
//     return view('users');

// });
// Route::get('user', ['uses'=>'UserController@index']);
// Route::get('', ['uses'=>'UserController@regUser']);
// Route::post('storeUser', ['uses'=>'UserController@storenwUser']);

Route::get('', ['uses'=>'UserController@regUser']);
Route::post('storeItemDet', ['uses'=>'BlazerController@regItm']);
Route::get('view', ['uses'=>'BlazerController@viewItm']);
