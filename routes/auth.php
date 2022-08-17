<!-- CONFIGURE WHICH view may display dependencies on state authenencion -->


<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('/login/user', [LoginController::class, 'showUserLogin'])->name('login/user');
    Route::post('/login/user', [LoginController::class, 'userLogin'])->name('login/user');

    Route::get('/register/user', [RegisterController::class, 'showUserRegister'])->name('register/user');
    Route::post('/register/user', [RegisterController::class, 'userRegister'])->name('register/user');

    Route::get('/login/admin', [LoginController::class, 'showAdminLogin'])->name('login/admin');
    Route::post('/login/admin', [LoginController::class, 'adminLogin'])->name('login/admin');

    Route::get('/register/admin', [RegisterController::class, 'showAdminRegister'])->name('register/admin');
    Route::post('/register/admin', [RegisterController::class, 'adminRegister'])->name('register/admin');

});

Route::post('logout', [LogoutController::class, 'redirectToLoginPage'])->name('logout');

?>