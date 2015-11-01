<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Controllers\Auth;
use App\Property;

/**
 * Description of HomeController
 *
 * @author Alivenow
 */
class SearchController extends Controller {

    public function getIndex(Request $request) {
        $keyword = $request->keyword;

        $properties = Property::where('address', 'LIKE', '%' . $keyword . '%')
                ->get();
        return response()->view('search', ['properties' => $properties, 'keyword' => $keyword]);
    }

}
