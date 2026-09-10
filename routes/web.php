<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('contact', function () {
    return view('contact');
});

Route::get('/contact/create', [ContactController::class, 'create']);
Route::get('products/create', [ProductController::class, 'create']);
