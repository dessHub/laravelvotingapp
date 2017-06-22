<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Citizen extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','phoneno', 'county', 'constituency', 'ward', 'gender',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
