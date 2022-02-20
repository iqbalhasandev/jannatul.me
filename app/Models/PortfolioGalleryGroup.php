<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioGalleryGroup extends Model
{
    use HasFactory, WithCache;
    protected static $cacheKey = '__portfolio_gallery_group__';

    protected static $cacheRelationshipKeys = [
        'gallerys' => PortfolioGallery::class,
    ];


    public function gallerys()
    {
        return $this->hasMany(PortfolioGallery::class, 'group_id');
    }
}
