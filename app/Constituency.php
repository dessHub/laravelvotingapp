<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Constituency extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'county', 'wards', 'voters',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
