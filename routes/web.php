<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
    return view('test1');
});

Route::get('/test2', function () {
    return view('test2');
});
