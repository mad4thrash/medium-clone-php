<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'images',
        'slug',
        'title',
        'content',
        'image',
        'category_id',
        'user_id',
        'published_at'
    ];
}
