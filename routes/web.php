<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/', [MoviesController::class, 'index']);

Route::get('/show', function () {
    return view('pages.movies.show');
});
