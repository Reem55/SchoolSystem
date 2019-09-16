<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    protected $fillable = ['code', 'driver_name','user_name','phone','bus_id','password','driver_id'];
}
