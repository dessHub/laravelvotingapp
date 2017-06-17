<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Ballot extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'regNo', 'type', 'date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
