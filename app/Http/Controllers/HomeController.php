<?php

namespace App\Http\Controllers;

use App\Models\Image;

class HomeController extends Controller
{

    public function index()
    {
        $images = Image::orderBy('created_at', 'desc')->get();
        return view('gallery', ['images' => $images]);
    }

}