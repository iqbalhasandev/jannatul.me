<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortfolioService extends Model
{
    use HasFactory, WithCache;

    protected static $cacheKey = '__portfolio_service__';

    protected $fillable = ['title', 'icon', 'description'];
}
