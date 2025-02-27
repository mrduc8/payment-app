<?php
use Illuminate\Support\Facades\Route;

Route::get('/payment', function () {
    return view('payment.index'); // Trả về giao diện frontend
});
