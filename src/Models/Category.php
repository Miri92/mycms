<?php

namespace Miri92\Mycms\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Nestable\NestableTrait;

class Category extends Model
{
    use Sluggable;
    use NestableTrait;

    protected $fillable = ['parent_id', 'name', 'slug', 'image'];

    protected $parent = 'parent_id';

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
