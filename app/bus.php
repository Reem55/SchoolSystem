<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class bus extends Authenticatable
{
	use HasApiTokens;


    protected $fillable = [
                'code', 'driver_name','user_name','phone',
                'bus_id','password','driver_id','start_work_time',
                'end_work_time'
                ];


	public function token()
    {
        return $this->hasMany(DeviceToken::class, 'user_id');
    }

     public function students()
    {
        return $this->hasMany('App\student','bus_id');
    }

 	public function setPasswordAttribute($password): void
    {
        if ($password) {
            // If password was accidentally passed in already hashed, try not to double hash it
            if (
                (\strlen($password) === 60 && preg_match('/^\$2y\$/', $password)) ||
                (\strlen($password) === 95 && preg_match('/^\$argon2i\$/', $password))
            ) {
                $hash = $password;
            } else {
                $hash = Hash::make($password);
            }

            $this->attributes['password'] = $hash;
        }
    }
}
