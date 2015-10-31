<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Description of Property
 *
 * @author Alivenow
 */
class PropertyController extends Controller{
    public function getIndex() {
        
    }
    
    public function getAdd() {
        return response()->view('property.add');
    }
    
 
}
