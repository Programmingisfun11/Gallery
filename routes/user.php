<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function () {
    return view('user');
})->middleware(['auth:user']);

Route::get('/favoriteImages', [UserController::class, 'showFavoriteImages'])->name('favImages');

Route::get('/addfavoriteImages/{id}', [UserController::class, 'addFavoriteImage'])->name('addFavoriteImages');