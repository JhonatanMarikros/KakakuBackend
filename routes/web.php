<?php
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Home';
    return view('main.home', compact('title'));
});
Route::get('/home', function () {
    $title = 'Home';
    return view('main.home', compact('title'));
});
Route::get('/menu/makanan', [MakananController::class, 'showMenu'])->name('makanan');

Route::get('/menu/minuman', [MinumanController::class, 'showMenu'])->name('minuman');

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


Route::resource('adminminuman', MinumanController::class);



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ADMIN
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/adminhome', function() {
        $title = 'Admin Home';
        return view('admin.home', compact('title'));
    })->name('admin.home');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::resource('adminuser', AdminUserController::class);
    Route::resource('admins', AdminController::class);
});

Route::get('/admincoupon', function () {
    $title = 'Coupon';
    return view('admin.coupon', compact('title'));
})->name('admincoupon')->middleware('auth:admin');
