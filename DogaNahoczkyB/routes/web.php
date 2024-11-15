<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmGenreController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/new-genre', [FilmGenreController::class, 'index'])->name('genre.index');
Route::post('/new-genre', [FilmGenreController::class, 'store'])->name('genre.store');

Route::get('/new-film', [FilmController::class, 'index'])->name('film.index');
Route::post('/new-film', [FilmController::class, 'store'])->name('film.store');

require __DIR__.'/auth.php';
