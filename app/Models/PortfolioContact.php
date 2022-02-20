<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioContact extends Model
{
    use HasFactory, WithCache;
    protected static $cacheKey = '__portfolio_contact__';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
