<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('gallery', [HomeController::class, 'index'])->name('gallery');

require __DIR__ . '/user.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/auth.php';