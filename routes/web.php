<?php

use App\Http\Controllers\ComicController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comics/filter/{genre_id?}', function ($genre_id = null) {
    return redirect()->route('comics.index', ['genre_id' => $genre_id]);
})->name('comics.filter');

Route::resource('comics', ComicController::class);
