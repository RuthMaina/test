<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    // Create many-to-one relationship with student table
    public function student(){
        return $this -> belongsTo('App\Student');
    }
}
