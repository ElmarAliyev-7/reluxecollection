<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\{
    HomeController,
    ProductController,
};

Route::get('/',           [HomeController::class, 'index'])->name('home');
Route::get('/brands',     [HomeController::class, 'brands'])->name('brands');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/colors',     [HomeController::class, 'colors'])->name('colors');
Route::get('/conditions', [HomeController::class, 'conditions'])->name('conditions');
Route::get('/sizes',      [HomeController::class, 'sizes'])->name('sizes');
Route::get('/users',      [HomeController::class, 'users'])->name('users');
Route::get('/products',   [ProductController::class, 'index'])->name('products');
