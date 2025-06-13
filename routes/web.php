<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('template');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/song', [SongController::class, 'index'])->name('song.index');
    Route::post('/song', [SongController::class, 'store'])->name('song.store');
    Route::get('/song/{song}/show', [SongController::class, 'show'])->name('song.show');
    Route::put('/song/{song}', [SongController::class, 'update'])->name('song.update');
});

require __DIR__.'/auth.php';
