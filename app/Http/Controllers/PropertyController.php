<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\Interest;
use App\Bid;

/**
 * Description of Property
 *
 * @author Alivenow
 */
class PropertyController extends Controller {

    public function getIndex(Request $request) {
        $user = $request->user();
        $properties = Property::where('user_id', $user->id)
                ->get();
        return response()->view('property.list', ['properties' => $properties]);
    }

    public function getAdd() {
        $property = new \stdClass();
        $property->name = '';
        $property->address = '';
        $property->is_vastu = FALSE;
        $property->door_facing = '';
        $property->no_of_rooms = '';
        $property->is_furnished = FALSE;
        $property->house_type = '';
        $property->min_property_amount = '';
        $property->property_sale_type = '';
        $property->home_exterior_pic = 'placeholder.gif';
        $property->home_hall_pic = 'placeholder.gif';
        $property->bedroom_pic = 'placeholder.gif';
        $property->kitchen_pic = 'placeholder.gif';
        $property->operation = 'Add';
        return response()->view('property.add', ['property' => $property]);
    }

    public function postAdd(Request $request) {
        $home_exterior_pic = 'placeholder.gif';
        $home_hall_pic = 'placeholder.gif';
        $bedroom_pic = 'placeholder.gif';
        $kitchen_pic = 'placeholder.gif';

        $user = $request->user();

        if ($request->hasFile('home_exterior_pic')) {
            $home_exterior_pic = $user->id . '_' . $request->file('home_exterior_pic')->getClientOriginalName();
            $request->file('home_exterior_pic')->move('uploads/properties/', $home_exterior_pic);
        }
        if ($request->hasFile('home_hall_pic')) {
            $home_hall_pic = $user->id . '_' . $request->file('home_hall_pic')->getClientOriginalName();
            $request->file('home_hall_pic')->move('uploads/properties/', $home_hall_pic);
        }
        if ($request->hasFile('bedroom_pic')) {
            $bedroom_pic = $user->id . '_' . $request->file('bedroom_pic')->getClientOriginalName();
            $request->file('bedroom_pic')->move('uploads/properties/', $bedroom_pic);
        }
        if ($request->hasFile('kitchen_pic')) {
            $kitchen_pic = $user->id . '_' . $request->file('kitchen_pic')->getClientOriginalName();
            $request->file('kitchen_pic')->move('uploads/properties/', $kitchen_pic);
        }



        $property = new Property;
        $property->user_id = $user->id;
        $property->name = $request->name;
        $property->address = $request->address;
        $property->is_vastu = ($request->has('is_vastu')) ? TRUE : FALSE;
        $property->door_facing = $request->door_facing;
        $property->no_of_rooms = $request->no_of_rooms;
        $property->is_furnished = ($request->has('is_furnished')) ? TRUE : FALSE;
        $property->house_type = $request->house_type;
        $property->min_property_amount = $request->min_property_amount;
        $property->property_sale_type = $request->property_sale_type;
        $property->home_exterior_pic = $home_exterior_pic;
        $property->home_hall_pic = $home_hall_pic;
        $property->bedroom_pic = $bedroom_pic;
        $property->kitchen_pic = $kitchen_pic;

        $property->save();

        return redirect('properties');
    }

    public function getEdit($property_id) {
        $property = Property::find($property_id);

        return response()->view('property.add', ['property' => $property]);
    }

    public function postEdit($property_id, Request $request) {

        $property = Property::find($property_id);

        $user = $request->user();
        $home_exterior_pic = $property->home_exterior_pic;
        $home_hall_pic = $property->home_hall_pic;
        $bedroom_pic = $property->bedroom_pic;
        $kitchen_pic = $property->kitchen_pic;


        if ($request->hasFile('home_exterior_pic')) {
            $home_exterior_pic = $user->id . '_' . $request->file('home_exterior_pic')->getClientOriginalName();
            $request->file('home_exterior_pic')->move('uploads/properties/', $home_exterior_pic);
        }
        if ($request->hasFile('home_hall_pic')) {
            $home_hall_pic = $user->id . '_' . $request->file('home_hall_pic')->getClientOriginalName();
            $request->file('home_hall_pic')->move('uploads/properties/', $home_hall_pic);
        }
        if ($request->hasFile('bedroom_pic')) {
            $bedroom_pic = $user->id . '_' . $request->file('bedroom_pic')->getClientOriginalName();
            $request->file('bedroom_pic')->move('uploads/properties/', $bedroom_pic);
        }
        if ($request->hasFile('kitchen_pic')) {
            $kitchen_pic = $user->id . '_' . $request->file('kitchen_pic')->getClientOriginalName();
            $request->file('kitchen_pic')->move('uploads/properties/', $kitchen_pic);
        }

        $property->name = $request->name;
        $property->address = $request->address;
        $property->is_vastu = ($request->has('is_vastu')) ? TRUE : FALSE;
        $property->door_facing = $request->door_facing;
        $property->no_of_rooms = $request->no_of_rooms;
        $property->is_furnished = ($request->has('is_furnished')) ? TRUE : FALSE;
        $property->house_type = $request->house_type;
        $property->min_property_amount = $request->min_property_amount;
        $property->property_sale_type = $request->property_sale_type;
        $property->home_exterior_pic = $home_exterior_pic;
        $property->home_hall_pic = $home_hall_pic;
        $property->bedroom_pic = $bedroom_pic;
        $property->kitchen_pic = $kitchen_pic;

        $property->save();

        return redirect('properties/edit/' . $property_id);
    }

    public function getSearch(Request $request) {

        $keyword = $request->keyword;
        $min = $request->min;
        $max = $request->max;
        $properties = array();

        if ($max && $min) {

            $properties = Property::where('address', 'LIKE', '%' . $keyword . '%')
                    ->whereBetween('min_property_amount', array($min, $max))
                    ->get();
        } else if ($max) {
            $properties = Property::where('address', 'LIKE', '%' . $keyword . '%')
                    ->where('min_property_amount', '<=', $max)
                    ->get();
        } else if ($min) {
            $properties = Property::where('address', 'LIKE', '%' . $keyword . '%')
                    ->where('min_property_amount', '>=', $min)
                    ->get();
        } else if ($keyword) {
            $properties = Property::where('address', 'LIKE', '%' . $keyword . '%')
                    ->get();
        }


        return response()->view('property.search', ['properties' => $properties]);
    }

    public function postInterest(Request $request) {
        $user = $request->user();

        $interest = new Interest;
        $interest->user_id = $user->id;
        $interest->property_id = $request->property_id;
        $interest->is_confirmed = FALSE;
        $interest->save();
        return redirect('properties/search');
    }

    public function getBid($property_id) {
        $property = Property::find($property_id);


        return response()->view('property.view', ['property' => $property]);
    }

    public function postBid($property_id, Request $request) {
        $user = $request->user();

//echo $request->bid_amount;
//exit();
        $bid = new Bid;
        $bid->user_id = $user->id;
        $bid->property_id = $property_id;
        $bid->bid_amount = $request->bid_amount;
        
        $bid->save();
        return redirect('properties/bid/' . $property_id);
    }

}
