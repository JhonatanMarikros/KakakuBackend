<?php

use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

Route::get('/', function () {
    return view('main.home');
});




// ADMIN
Route::get('/adminhome', function () {
    return view('admin.home', [
        'title' => 'Home'
    ]);
});

Route::resource('adminuser', AdminUserController::class);

Route::get('/adminmakanan', function () {
    return view('admin.makanan', [
        'title' => 'Makanan'
    ]);
});

Route::get('/adminminuman', function () {
    return view('admin.minuman', [
        'title' => 'Minuman'
    ]);
});

Route::get('/admincoupon', function () {
    return view('admin.coupon', [
        'title' => 'Minuman'
    ]);
});
