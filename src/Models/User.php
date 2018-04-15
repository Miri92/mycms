<?php

namespace Miri92\Mycms\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function UserMeta()
    {
        return $this->hasOne('Miri92\Mycms\Models\UserMeta', 'user_id');
    }

    public function Role()
    {
        $get_role = $this->hasOne('Miri92\Mycms\Models\UserMeta', 'user_id')
            ->where('meta_key', 'role');
        return $get_role;
    }
}
