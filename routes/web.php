<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.home');
});

Route::get('/menu', function () {
    return view('main.menu');
});
