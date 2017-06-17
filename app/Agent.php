<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Agent extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','phoneno', 'gender','status', 'regNo', 'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
