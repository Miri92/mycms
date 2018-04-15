<?php

namespace Miri92\Mycms\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Post extends Model
{
//    use Translatable;

    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = [
        'author_id',
        'category_id',
        'title',
        'excerpt',
        'body',
//        'slug',
        'post_type',
        'status',
        'created_at'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function PostField()
    {
        return $this->hasMany('App\PostField', 'post_id');
    }

    public function FeaturedImage()
    {
        return $this->hasOne('App\PostField', 'post_id')
            ->where('field_key', 'featured_image');
    }

    public function Gallery()
    {
        return $this->hasMany('App\PostField', 'post_id')
            ->where('field_key', 'gallery');
    }
}
