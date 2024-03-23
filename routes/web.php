<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\View\Components\AdminLayout;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/customer', [AdminController::class, 'customer'])->middleware(['auth', 'verified'])->name('customer');
Route::get('/order', [AdminController::class, 'order'])->middleware(['auth', 'verified'])->name('order');
Route::get('/analytic', [AdminController::class, 'analytic'])->middleware(['auth', 'verified'])->name('analytic');
Route::get('/message', [AdminController::class, 'message'])->middleware(['auth', 'verified'])->name('message');
Route::get('/product', [AdminController::class, 'product'])->middleware(['auth', 'verified'])->name('product');
Route::get('/product-add-view', [AdminController::class, 'addProduct'])->middleware(['auth', 'verified'])->name('product-add-view');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
