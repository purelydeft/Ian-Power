<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\BlogCategory;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Blog extends Model
{
    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('blog_title')
            ->saveSlugsTo('blog_slug');
    }

    public function getRouteKeyName()
    {
        return 'blog_slug';
    }
    //
    protected $fillable = [
        'blog_title','blog_slug','category_id','blog_image','blog_shortDesc','blog_fullDesc'
    ];


    public function getcatRelation()
    {
        return $this->belongsTo('App\BlogCategory','category_id');
    }
}
