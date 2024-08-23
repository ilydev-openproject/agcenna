<?php

use App\Http\Controllers\Admin\admBlog;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;


// Di routes/web.php
Route::get('/', [HomeController::class, 'index']);
Route::get('/beranda', [HomeController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/agency', [TentangController::class, 'agency']);
Route::get('/webdev', [TentangController::class, 'webdev']);
Route::get('/design', [TentangController::class, 'design']);
Route::get('/medsos', [TentangController::class, 'medsos']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'detail']);
Route::get('/blog/category/{slug}', [BlogController::class, 'category']);
Route::get('/blog/tag/{slug}', [BlogController::class, 'tag']);
Route::get('/contact', [ContactController::class, 'index']);
