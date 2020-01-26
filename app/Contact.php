<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable=[
        'building',
        'box',
        'phone',
        'email',
    ];
    protected $casts=[
        'building'=>'string',
        'box'=>'string',
        'phone'=>'string',
        'email'=>'string',
    ];
}
