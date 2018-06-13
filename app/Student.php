<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 */
class Student extends Model
{
    // Create one-to-many relationship with fees table

    public function fees(){
        return $this -> hasMany('App\Fees');
    }
}
