<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class FavoriteImage extends Authenticatable
{
    use HasFactory;

    protected $table = 'favoriteimages';
    protected $fillable = [
        'user_id',
        'image_id',

    ];
}