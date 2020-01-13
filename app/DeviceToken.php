<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sparent;
use App\bus;

class DeviceToken extends Model
{
    protected $table = 'fcm_tokens';

    protected $fillable = ['token','device'];

    public function parent()
    {
        return $this->belongsTo(Sparent::class,'user_id','')->where('type','=','parent');
    }

    public function bus()
    {
        return $this->belongsTo(bus::class,'user_id')->where('type','=','bus');
    }

}
