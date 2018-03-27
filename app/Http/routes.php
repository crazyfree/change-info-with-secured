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

// Routes for APIs
require __DIR__ . '/api-routes.php';

// Authentication Routes...
//Route::get('/login', function (){
//    return view('authentication.login');
//});
//Route::get('/profile', function () {
//    return view('users.profile');
//});
//
//Route::post('/login', 'Auth\AuthController@doLogin');
//Route::post('/profile', 'ProfileController@doChangeProfile');
//Route::post('/logout', 'Auth\AuthController@doLogout');
