<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortfolioGallery extends Model
{
    use HasFactory, WithCache;
    protected static $cacheKey = '__portfolio_gallery__';

    protected static $cacheRelationshipKeys = [
        'group' => PortfolioGalleryGroup::class,
    ];


    public function group()
    {
        return $this->belongsTo(PortfolioGalleryGroup::class, 'group_id');
    }
}
