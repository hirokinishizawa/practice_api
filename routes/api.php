<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('register', 'AuthController@register')->name('register');
Route::post('login', 'AuthController@login')->name('login');
Route::post('logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth:api']], function () {
    Route::group(['namespace' => 'User'], function () {
        Route::get('/me', 'User\UserController@me');
        Route::get('/user', 'User\UserController@user');
    });
});
