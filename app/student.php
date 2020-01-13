<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable =['name','bus_id'];

    public function parent()
    {
        return $this->belongsTo('App\Sparent');
    }

     public function bus()
    {
        return $this->belongsTo('App\bus','bus_id');
    }
}
