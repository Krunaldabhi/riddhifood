<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscribe extends Model
{
    //
     protected $fillable = [
       'id', 'name','email'
    ];


    protected $hidden = [
        'created_at', 'updated_at',
    ];
}

