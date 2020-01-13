<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class Sparent extends Authenticatable
{

	use HasApiTokens;

   protected $fillable =['code' , 'first_name' , 'last_name' , 'user_name' , 'password' , 'mobile_number1' , 'mobile_number2' , 'address', 'student_id'];


    public function students()
    {
        return $this->hasMany('App\student','id','student_id');
    }


	public function token()
    {
        return $this->hasMany(DeviceToken::class, 'user_id');
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
