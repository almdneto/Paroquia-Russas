<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiturgiaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/liturgia', [LiturgiaController::class, 'liturgia']);