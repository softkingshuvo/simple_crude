<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;

use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/admin-login', [AdminAuthController::class, 'login'])->name('admin.login');

Route::middleware([AdminMiddleware::class])->group(function () {

    Route::get('/admin-dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin-logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    Route::get('/admin-change-password', [AdminAuthController::class, 'password'])->name('admin.password');
    Route::post('/password-update', [AdminAuthController::class, 'updatePassword'])->name('admin.password.update');

    /*Category*/

    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::post('category-store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category-update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('category-destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


    Route::resource('brand', BrandController::class);
    Route::get('brand-datatable', [BrandController::class, 'dataTable'])->name('brand.datatable');

});

Route::get('/', function () {
    return view('backend.login');
})->name('home');

require __DIR__.'/auth.php';
