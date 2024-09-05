<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});
Route::get('/authentication-form', function () {
    return view('authenform');
});
require __DIR__.'/auth.php';
