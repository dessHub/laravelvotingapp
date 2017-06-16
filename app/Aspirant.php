<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Aspirant extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'email','phoneno', 'county', 'constituency', 'ward', 'gender','status', 'regNo', 'docket', 'type', 'votes', 'date'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
