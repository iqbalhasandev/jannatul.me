<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortfolioSkill extends Model
{
    use HasFactory, WithCache;
    protected static $cacheKey = '__portfolio_skill__';
}
