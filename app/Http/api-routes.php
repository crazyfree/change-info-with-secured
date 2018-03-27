<?php
/**
 * Created by PhpStorm.
 * User: Crazyfree
 * Date: 3/27/18
 */

Route::group(['middleware' => ['exception.handler']], function () {
    Route::post('/api/v1/login', 'Auth\AuthController@postLogin');

    // This router will list out app routes for APIs
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::post('/api/v1/profile', 'ProfileController@changeProfile');
//        Route::post('/api/v1/logout', 'Auth\AuthController@getLogout');
    });
});
