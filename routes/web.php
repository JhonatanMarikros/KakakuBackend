<?php

use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CouponUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ContactController;
use App\Mail\ContactMail;

Route::get('/', function () {
    $title = 'Kakaku Coffee';
    return view('main.home', compact('title'));
});

Route::get('/home', function () {
    $title = 'Kakaku Coffee';
    return view('main.home', compact('title'));
});

Route::get('/location', [LocationController::class, 'mainPage'])->name('location.main');
Route::get('/menu/makanan', [MakananController::class, 'showMenu'])->name('makanan');
Route::get('/menu/minuman', [MinumanController::class, 'showMenu'])->name('minuman');
Route::get('/contact', function () {
    return view('main.contact'); // Ganti dengan nama view yang sesuai
})->name('contact');


// Route untuk mengirimkan form Contact Us
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// Middleware auth endurance untuk memastikan pengguna telah login
Route::middleware(['auth'])->group(function () {
    Route::get('/coupons', [CouponUserController::class, 'index'])->name('coupons.index');
    Route::post('/coupons/{id}/claim', [CouponUserController::class, 'claim'])->name('coupons.claim');
});

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ADMIN Routes dengan auth middleware endurance
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/adminhome', function () {
        $title = 'Admin Home';
        return view('admin.home', compact('title'));
    })->name('admin.home');

    Route::resource('adminuser', AdminUserController::class);
    Route::resource('admins', AdminController::class);
    Route::resource('adminmakanan', MakananController::class);
    Route::resource('adminminuman', MinumanController::class);
    Route::resource('adminlocations', LocationController::class);
    Route::resource('admincoupon', CouponController::class);
});