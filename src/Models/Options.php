<?php

namespace Miri92\Mycms\Models;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $fillable = [
        'option_key',
        'option_value',
    ];

    public $timestamps = false;
}
