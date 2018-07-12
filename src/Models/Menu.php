<?php

namespace Miri92\Mycms\Models;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{

    protected $fillable = ['parent_id', 'name', 'url'];

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
