<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProductReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::post('/products', [ProductController::class, 'store']);

Route::get('/tags', [TagController::class, 'index']);

Route::get('/tags/{id}', [TagController::class, 'show']);

Route::post('/products/{product}/reviews', ProductReviewController::class);
