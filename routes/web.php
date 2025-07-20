<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/service/{id}/{slug}', [PagesController::class, 'service'])->name('services.show');
Route::get('/supply-chain/{id}/{slug}', [PagesController::class, 'supplyChain'])->name('supply.show');
Route::get('/news', [PagesController::class, 'news'])->name('news');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/article/{id}/{slug}', [PagesController::class, 'article'])->name('article');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/quote', [PagesController::class, 'quote'])->name('quote');
Route::post('/quote', [PagesController::class, 'submitQuote'])->name('submitQuote');


Route::get('/about', function () {
    return view('about');
})->name('about');
