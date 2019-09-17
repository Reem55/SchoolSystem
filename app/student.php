<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable =['name' ];

    public function parent()
    {
        return $this->belongsTo('App\Sparent');
    }
}
