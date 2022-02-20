<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioExperience extends Model
{
    use HasFactory, WithCache;


    protected static $cacheKey = '__portfolio_experience__';
    protected $fillable = ['title', 'session', 'description'];
}
