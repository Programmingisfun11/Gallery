<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');

    }
    public function showImageForm()
    {
        return view('admin.imageForm');
    }

    public function createImage(Request $request)
    {

        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            Image::create([
                'image' => $filename,
            ]);
            $images = Image::orderBy('created_at', 'desc')->get();
            return view('gallery', ['images' => $images]);

        } else {
            return 'please put image';
        }
    }

}
