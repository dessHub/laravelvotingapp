<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Ward extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'county', 'constituency', 'voters',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
