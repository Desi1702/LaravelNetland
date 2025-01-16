<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ActorController;

Route::resource('media', MediaController::class);
Route::resource('actors', ActorController::class);

// Zoekfunctie
Route::get('/search', [MediaController::class, 'search'])->name('media.search');

Route::get('/', function () {
    return redirect('/media');
});
Route::get('/', function () {
    return view('welcome');
});
