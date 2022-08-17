<?php

namespace App\Http\Controllers;

use App\Models\FavoriteImage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth:user');

    }

    public function showFavoriteImages()
    {
        $idUser = auth('user')->user()->id;
        $images = User::find($idUser)->images;
        return view('user.favoritePages', ['data' => $images]);
    }

    public function addFavoriteImage($idImage)
    {

        $idUser = auth('user')->user()->id;
        FavoriteImage::create([
            'user_id' => $idUser,
            'image_id' => $idImage,

        ]);

        return redirect()->back()->with('status', 'Image added successfully');
    }

}