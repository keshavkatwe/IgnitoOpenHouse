<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Controllers\Auth;
use App\UserProfile;

/**
 * Description of ProfileController
 *
 * @author Alivenow
 */
class ProfileController extends Controller{
    public function getIndex() {
        
        var_dump(App\UserProfile::get());
        
//        return response()->view('profile.add');
    }
    
    public function postIndex(Request $request) {
        
        $user = $request->user();
        
        
        $profile = new UserProfile;
        $profile->user_id = $user->id;
        $profile->designation = $request->designation;
        $profile->address = $request->address;
        $profile->city = $request->city;
        $profile->state = $request->state;
        $profile->country = $request->country;
        
        $profile->save();
    }
}
