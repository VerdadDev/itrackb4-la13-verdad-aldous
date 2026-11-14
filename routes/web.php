<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/comics/filter/{genre_id?}', function ($genre_id = null) {
    return redirect()->route('comics.index', ['genre_id' => $genre_id]);
})->name('comics.filter');

Route::resource('comics', ComicController::class);
