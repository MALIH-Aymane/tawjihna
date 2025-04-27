<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;

// admin blog
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoryController;



Route::get('/', function () {
    return view('landing.index');
});

// Main Page Route
Route::get('/home', [HomePage::class, 'index'])->name('pages-home');
Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');

// admin blog :
Route::get('/admin/blog-create', [BlogController::class, 'createBlogIndex'])->name('admin-blog-create');
Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blog.index');
Route::post('/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');

// admin blog category management :
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('/categories', CategoryController::class)->except(['show', 'create', 'edit']);
});

// Auth routes
require __DIR__.'/auth.php';
