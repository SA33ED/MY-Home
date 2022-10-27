<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PropertiesController::class,'index'])->name('properties');
Route::get('/dashboard', [PropertiesController::class,'index_loged'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/dashboard', [PropertiesController::class, 'result_by_dynamically'])->name('properties.result_by_dynamically');
require __DIR__.'/auth.php';

