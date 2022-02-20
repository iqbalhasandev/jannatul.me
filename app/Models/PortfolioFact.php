<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioFact extends Model
{
    use HasFactory, WithCache;

    protected static $cacheKey = '__portfolio_fact__';
}
