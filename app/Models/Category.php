<?php

namespace App\Models;

use App\Traits\WithCache;
use TCG\Voyager\Models\Category as TcgCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends TcgCategory
{
    use HasFactory, WithCache;

    protected static $cacheKey = '__category__';
}
