<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;

class Book extends Model
{
    use HasFactory;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function scopeTitle(Builder $query, string $title):Builder
    {
        return $query->where("title","LIKE","%". $title . '%');
    }
    
    // public function scopeMinReviews(Builder $query, int $minReviews): Builder|QueryBuilder
    // {
    //     return $query->where('reviews_count', '>=', $minReviews);
    // }
}
