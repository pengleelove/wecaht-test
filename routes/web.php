<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group([], function () {
});
Route::get('/', 'HomeController@index');
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/test', function () {
    return '测试成功';
});
Auth::routes();

//Route::get('/show-register', 'Auth\RegisterController@showRegistrationForm')->name('show.register');
//Route::post('/register', 'Auth\RegisterController@create')->name('register');
//Route::get('/password-request', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::get('/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
