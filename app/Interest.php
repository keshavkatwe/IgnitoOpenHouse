<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model {

    public function User() {
        return $this->belongsTo('App\User');
    }

    public function Appointments() {
        return $this->hasOne('App\Appointment', 'id', 'interest_id');
    }

    
}
