<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'username',
        'img',
        'email',
        'address',
        'phone',
        'website',
        'company',
    ];
}
