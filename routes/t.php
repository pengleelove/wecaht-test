<?php

use App\User;
use Illuminate\Support\Facades\Route;

Route::get('tt', function () {
      return User::all();
    //return redirect('http://www.baidu.com');
});
