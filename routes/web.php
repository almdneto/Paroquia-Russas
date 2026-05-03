<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiturgiaController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/liturgia', [LiturgiaController::class, 'index'])->name('liturgia.index');
Route::get('/liturgia/pdf', [LiturgiaController::class, 'downloadPdf'])->name('liturgia.pdf');

Route::get('/localizacao', function (){
    return view('pages.localizacao');
})->name('pages.localizacao');