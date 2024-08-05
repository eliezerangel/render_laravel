<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/contacts', [HomeController::class, 'contacts']);

Route::get('/login', [AuthController::class, 'login']);
