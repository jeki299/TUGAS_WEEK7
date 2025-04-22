<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SepatuController;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/sepatu', [SepatuController::class, 'index']);