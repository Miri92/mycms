<?php

namespace Miri92\Mycms\Models;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    protected $table = 'usermeta';

    public $timestamps = false;

    protected $fillable = [
        'meta_key','meta_value'
    ];

    public function user()
    {
        return $this->belongsTo('Miri92\Mycms\Models\User');
    }
}
