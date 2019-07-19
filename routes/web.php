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

Auth::routes();

Route::group(['prefix' => 'contact_user'], function() {
    // home
    Route::get('home', 'ContactUser\HomeController@index')->name('contact_user.home');

    // login/logout
    Route::get('login', 'ContactUser\Auth\LoginController@showLoginForm')->name('contact_user.login');
    Route::post('login', 'ContactUser\Auth\LoginController@login')->name('contact_user.login');
    Route::post('logout', 'ContactUser\Auth\LoginController@logout')->name('contact_user.logout');

    // register
    Route::get('register', 'ContactUser\Auth\RegisterController@showRegisterForm')->name('contact_user.register');
    Route::post('register', 'ContactUser\Auth\RegisterController@register')->name('contact_user.register');
});

Route::get('/home', 'HomeController@index')->name('home');
