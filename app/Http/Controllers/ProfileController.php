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
class ProfileController extends Controller {

    public function getIndex(Request $request) {
        $user = $request->user();
        $profile = UserProfile::where('user_id', $user->id)->first();
        if ($profile == NULL) {
            $profile = new \stdClass();
            $profile->profile_pic = 'default.jpg';
            $profile->designation = '';
            $profile->address = '';
            $profile->city = '';
            $profile->state = '';
            $profile->country = '';
            $profile->photo_id_proof = '';
        }
        
//        var_dump($profile);
        return response()->view('profile.add', ['profile' => $profile]);
    }

    public function postIndex(Request $request) {

        $user = $request->user();
        if (UserProfile::where('user_id', $user->id)->count()) {
            $profile = UserProfile::where('user_id', $user->id)->first();
            $profile_picture = $profile->profile_pic;
            $proof = $profile->photo_id_proof;
        } else {
            $profile = new UserProfile;
            $profile_picture = NULL;
            $proof = NULL;
        }



        if ($request->hasFile('profile_picture')) {
            $profile_picture = $user->id . '_' . $request->file('profile_picture')->getClientOriginalName();
            $request->file('profile_picture')->move('uploads/profile_pics/', $profile_picture);
        }

        if ($request->hasFile('proof')) {
            $proof = $user->id . '_' . $request->file('proof')->getClientOriginalName();
            $request->file('proof')->move('uploads/proof/', $proof);
        }


        $profile->user_id = $user->id;
        $profile->profile_pic = $profile_picture;
        $profile->designation = $request->designation;
        $profile->address = $request->address;
        $profile->city = $request->city;
        $profile->state = $request->state;
        $profile->country = $request->country;
        $profile->photo_id_proof = $proof;
        $profile->save();

        return redirect('profile');
    }

}
