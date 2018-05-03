<?php


//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@index');

Route::get('/test', function () {
    return Response::json([
        'code'   => 0,
        'message'=> '您当前处于测试环境中',
        'data'   => [],
    ]);
});
Auth::routes();
