<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function Interests() {
        return $this->hasMany('App\Interest');
    }
    
    
    public function Bids() {
        return $this->hasMany('App\Bid')->orderBy('bid_amount', 'desc');
    }
    
    
}
