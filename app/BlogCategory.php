<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    //


    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('Cat_title')
            ->saveSlugsTo('cat_slug');
    }

    public function getRouteKeyName()
    {
        return 'cat_slug';
    }
    //
    protected $fillable = [
        'Cat_title','cat_slug','Cat_description','status',
    ];

    public function getpostRelation()
    {
        return $this->hasMany('App\Blog','id');
    }
   
}
