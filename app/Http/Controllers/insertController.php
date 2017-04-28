<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\iphone;

class insertController extends Controller {

    public function insertValues(Request $request) {
        
        $iphone = new iphone;
        $iphone->title = $request->name;
        $iphone->body = json_encode($request->description);
        $iphone->save(); 

        return view('home');
    }

}
