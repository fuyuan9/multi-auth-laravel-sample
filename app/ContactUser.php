<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class ContactUser extends Authenticatable
{
    protected $fillable = [
        'name',
        'uid',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
