<?php

use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.home');
});

// ADMIN
Route::get('/adminhome', function () {
    return view('admin.home', [
        'title' => 'Home'
    ]);
});

Route::get('/admincoupon', function () {
    return view('admin.coupon', [
        'title' => 'Minuman'
    ]);
});

Route::resource('adminmakanan', MakananController::class);

Route::get('/menu/makanan', [MakananController::class, 'showMenu'])->name('makanan');

Route::resource('adminminuman', MinumanController::class);

Route::get('/menu/minuman', [MinumanController::class, 'showMenu'])->name('minuman');
