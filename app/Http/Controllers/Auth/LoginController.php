<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest')->except('logout');
    }
    public function showUserLogin()
    {
        return view('auth.login', ['url' => 'user']);
    }

    public function userLogin(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('user')->attempt($credentials)) {

            $request->session()->regenerate();
            return redirect()->intended('/user');
        }
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'approve' => 'Wrong password or this account not approved yet.',
        ]);

    }

    public function showAdminLogin()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            $request->session()->regenerate();
            return redirect()->intended('/admin');

        }
        return redirect()->back()->withInput($request->only('email', 'password'))->withErrors([
            'approve' => 'Wrong Email or password',
        ]);

    }

}