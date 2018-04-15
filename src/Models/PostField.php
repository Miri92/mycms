<?php

namespace Miri92\Mycms\Models;

use Illuminate\Database\Eloquent\Model;

class PostField extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'field_key','field_value'
    ];

    public function Post()
    {
        return $this->belongsTo('App\Post');
    }
}
