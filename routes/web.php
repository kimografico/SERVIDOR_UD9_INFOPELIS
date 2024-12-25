<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Persons;
use App\Http\Controllers\MovieDirector;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blogCarlosSaez/postmovies', [MovieController::class, 'index'])->name('list');

Route::get('/movies/{id}', [MovieController::class, 'show'])->where('id', '[0-9]+')->name('movie');

Route::get('/addMovie', [MovieController::class, 'create'])->name('addMovie');

Route::get('/movies/{id}/characters', [MovieController::class, 'characters'])->name('characters');

Route::resource('/movies', MovieController::class)->except(['store', 'update', 'destroy']);

Route::resource('/persons', Persons::class)->only(['show']);

Route::get('/actors', [Persons::class, 'actors'])->name('actors');

Route::resource('/directors', MovieDirector::class)->only(['show', 'index']);

Route::get('/directors', [MovieDirector::class, 'show'])->name('directors');

Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('editMovie');

