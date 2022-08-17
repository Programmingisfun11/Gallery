<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:admin')->group(function () {

    Route::get('/addImage', [AdminController::class, 'showImageForm'])->name('showImageForm');
    Route::post('/gallery', [AdminController::class, 'createImage'])->name('postImage');
    Route::get('/admin', function () {
        return view('admin.admin');
    });
});