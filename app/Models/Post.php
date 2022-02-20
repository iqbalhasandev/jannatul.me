<?php

namespace App\Models;

use App\Traits\WithCache;
use TCG\Voyager\Models\Post as TcgPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends TcgPost
{
    use HasFactory, WithCache;

    protected static $cacheKey = '__post__';

    protected static $cacheRelationshipKeys = [
        'category' => Category::class,
        'author' => User::class
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
