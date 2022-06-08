<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'overview',
        'image',
        'url_video',
        'rating',
        'dateReview'
    ];

    //N-N Movies->Categories
    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }

    //N-N Movies->Directors
    public function directors()
    {
        return $this->belongsToMany(Director::class);
    }

    //N-N Movies->Actors
    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }
}
