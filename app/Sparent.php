<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sparent extends Model
{
   protected $fillable =['code' , 'first_name' , 'last_name' , 'user_name' , 'password' , 'mobile_number1' , 'mobile_number2' , 'address', 'student_id'];


    public function students()
    {
        return $this->hasMany('App\student','id','student_id');
    }


}
