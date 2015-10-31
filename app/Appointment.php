<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model {

    public function Interests() {
        return $this->hasOne('App\Interest', 'interest_id');
    }

}
