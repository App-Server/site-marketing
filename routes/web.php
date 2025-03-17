<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nossos-planos', function () {
    return view('site.price');
})->name('site.price');

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/cadastro-do-marketing', [SiteController::class, 'create'])->name('site.create');
Route::post('/cadastro-do-marketing', [SiteController::class, 'store'])->name('site.store');
