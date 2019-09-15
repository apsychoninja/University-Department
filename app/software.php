<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class software extends Model
{
    protected $fillable = [
        'title','description','image','download_link'
    ];

}
