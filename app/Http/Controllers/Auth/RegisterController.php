<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{

    public function __construct()
    {

        $this->middleware('guest:user');
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }

    public function showUserRegister()
    {

        return view('auth.register', ['url' => 'user']);

    }

    public function userRegister(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', Rules\Password::defaults()],
            ]
        );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/login/user');

    }

    public function showAdminRegister()
    {

        return view('auth.register', ['url' => 'admin']);

    }

    public function adminRegister(Request $request)
    {

        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', Rules\Password::defaults()],
            ]
        );

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($admin);

        return redirect('/login/admin');

    }

}