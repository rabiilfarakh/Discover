<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(Request $request){
        $nom = "rabii";
        $tab = ["php","sql","js"];
        return view('blog',compact('nom','tab'));
    }
}
