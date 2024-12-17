<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/inscription', function () {
    return view('inscription');
});

Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/home', function () {
    return view('home');
});
