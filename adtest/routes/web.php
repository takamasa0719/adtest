<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\ContactMiddleware;

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm'])->middleware(ContactMiddleware::class);
Route::post('/confirm/post', [ContactController::class, 'post']);

Route::get('/admin', [ContactController::class, 'admin']);
Route::post('/admin/delete', [ContactController::class, 'delete']);
Route::get('/admin/search', [ContactController::class, 'search']);