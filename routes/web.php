<?php

use App\Http\Controllers\LiturgiaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/liturgia', [LiturgiaController::class, 'index'])->name('liturgia.index');
Route::get('/liturgia/pdf', [LiturgiaController::class, 'downloadPdf'])->name('liturgia.pdf');

Route::get('/localizacao', function (){
    return view('pages.localizacao');
})->name('pages.localizacao');
require __DIR__.'/auth.php';
