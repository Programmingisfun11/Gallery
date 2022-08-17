<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{

    public function redirectToLoginPage()
    {
        Auth::guard('user')->logout();
        Auth::guard('admin')->logout();
        return view('welcome');
    }

}