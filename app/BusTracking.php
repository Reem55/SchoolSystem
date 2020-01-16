<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusTracking extends Model
{
    protected $fillable =['bus_id','current_longitude','current_latitude'];

    protected $table = 'bus_tracking';

    public function bus()
    {
        return $this->belongsTo('App\bus','bus_id');
    }
}
