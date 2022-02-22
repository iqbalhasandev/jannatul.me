<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoutubeContent extends Model
{
    use HasFactory, WithCache;

    protected static $cacheKey = '__youtube_content__';
}
