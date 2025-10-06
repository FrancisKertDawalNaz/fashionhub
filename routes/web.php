<?php

use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\JugController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlockedAccountController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\ModuleAccessController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ShareableController;
use App\Models\SchoolYearModel;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\fashionController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/chat', [ChatController::class, 'chat'])->name('chat');
Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');



// Public product details page (clean URL)
Route::get('/product', function (\Illuminate\Http\Request $request) {
    $product = [
        'img' => $request->query('img', ''),
        'name' => $request->query('name', ''),
        'desc' => $request->query('desc', ''),
        'price' => $request->query('price', ''),
        'inclusions' => json_decode($request->query('inclusions', '[]'), true),
        'shop' => $request->query('shop', 'Shop 1'),
        'size' => $request->query('size', 'Medium Size'),
    ];
    return view('user.product', compact('product'));
})->name('user.product');

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

// User routes
Route::middleware('auth:fashion')->group(function () {
    Route::get('/shop', [HomeController::class, 'index'])->name('user.shop');
    Route::get('/home', [HomeController::class, 'home'])->name('user.home'); 
    Route::get('/fashion', [HomeController::class, 'fashion'])->name('user.product');

});


// Admin routes
Route::middleware('auth')->group(function () {
    Route::get('/admin', [dashboardController::class, 'display_dashboard'])->name('admin.dashboard');
});


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

