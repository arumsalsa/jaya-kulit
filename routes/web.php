<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\CartController;
/* ==========================
   USER
========================== */
Route::get('/', [HomeController::class, 'index']);

Route::get('/service', function () {
    $about = \App\Models\AboutUs::first();
    return view('user.service', compact('about'));
});

Route::get('/about', [AboutPageController::class, 'index']);
Route::get('/products', [ProductPageController::class, 'index']);
Route::get('/products/{product}', [ProductPageController::class, 'show']);
Route::post('/cart/add/{product}', [CartController::class, 'add']);
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/remove/{id}', [CartController::class, 'remove']);

Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout']);

/* ==========================
   ADMIN (WAJIB LOGIN)
========================== */
Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);
Route::get('/about', [AboutController::class, 'index']);
    Route::post('/about', [AboutController::class, 'update']);
    Route::post('/about/gallery', [AboutController::class, 'uploadGallery']);
    Route::delete('/about/gallery/{id}', [AboutController::class, 'deleteGallery']);
});

require __DIR__.'/auth.php';