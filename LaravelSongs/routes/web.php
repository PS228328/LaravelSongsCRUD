<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Album_SongController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('/songs',[SongController::class, 'index'])->name('songs.index');
Route::get('/songs/create',[SongController::class, 'create'])->middleware('auth');
Route::post('/songs', [SongController::class, 'store'])->middleware('auth');
Route::get('/songs/{song}',[SongController::class, 'show']);
Route::get('/songs/{song}/edit',[SongController::class, 'edit'])->middleware('auth');
Route::put('/songs/{song}', [SongController::class, 'update'])->middleware('auth');
Route::delete('/songs/{song}', [SongController::class, 'destroy'])->middleware('auth');

Route::get('/bands',[BandController::class, 'index'])->name('bands.index');
Route::get('/bands/create',[BandController::class, 'create'])->middleware('auth');
Route::post('/bands', [BandController::class, 'store'])->middleware('auth');
Route::get('/bands/{band}',[BandController::class, 'show']);
Route::get('/bands/{band}/edit',[BandController::class, 'edit'])->middleware('auth');
Route::put('/bands/{band}', [BandController::class, 'update'])->middleware('auth');
Route::delete('/bands/{band}', [BandController::class, 'destroy'])->middleware('auth');

Route::get('/albums',[AlbumController::class, 'index'])->name('albums.index');
Route::get('/albums/create',[AlbumController::class, 'create'])->middleware('auth');
Route::post('/albums', [AlbumController::class, 'store'])->middleware('auth');
Route::get('/albums/{album}',[AlbumController::class, 'show']);
Route::get('/albums/{album}/edit',[AlbumController::class, 'edit'])->middleware('auth');
Route::put('/albums/{album}', [AlbumController::class, 'update'])->middleware('auth');
Route::delete('/albums/{album}', [AlbumController::class, 'destroy'])->middleware('auth');

Route::post('/albums/{album}/songs/{song}', [Album_SongController::class, 'store'])->middleware('auth');
Route::delete('/albums/{album}/songs/{song}', [Album_SongController::class, 'destroy'])->middleware('auth');

require __DIR__.'/auth.php';
