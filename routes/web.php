<?php


//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@index');

Route::get('/test', function () {
    return '测试成功';
});
Auth::routes();

