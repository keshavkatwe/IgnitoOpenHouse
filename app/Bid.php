<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model {

    public function User() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function Property() {
        return $this->belongsTo('App\Property', 'property_id');
    }

}
