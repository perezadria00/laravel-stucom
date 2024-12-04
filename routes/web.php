<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('year')->group(function () {
    Route::prefix('filmout')->group(function () {
        // Rutas con el prefijo "filmout"
        Route::get('oldFilms/{year?}', [FilmController::class, 'listOldFilms'])->name('oldFilms');
        Route::get('newFilms/{year?}', [FilmController::class, 'listNewFilms'])->name('newFilms');
        Route::get('films', [FilmController::class, 'listFilms'])->name('listFilms');

        Route::get('listFilmsByYear/{year?}', [FilmController::class, 'listFilmsByYear']);
        Route::get('listFilmsByGenre/{genre?}', [FilmController::class, 'listFilmsByGenre']);
        Route::get('sortFilms', [FilmController::class, 'listFilmsByYearDescending']);
        Route::get('countFilms', [FilmController::class, 'countFilms']);
    });
});
