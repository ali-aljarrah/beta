<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/service/{id}/{slug}', [PagesController::class, 'service'])->name('services.show');
Route::get('/supply-chain/{id}/{slug}', [PagesController::class, 'supplyChain'])->name('supply.show');
Route::get('/news', [PagesController::class, 'news'])->name('news');

Route::get('/about', function () {
    return view('about');
})->name('about');
