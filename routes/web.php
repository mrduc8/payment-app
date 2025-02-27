<?php

use App\Http\Controllers\ChargeController;
use Illuminate\Support\Facades\Route;

Route::get('/charge', [ChargeController::class, 'index'])->name('charge.index');
Route::post('/charge', [ChargeController::class, 'store'])->name('charge.store');

