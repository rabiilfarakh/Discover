<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recit;
use App\Models\User;
use App\Models\image;
use App\Models\destination;

class blogController extends Controller
{
    public function index(Request $request){
        $users = User::all();
        $recits = recit::all();
        $image = image::all();
        $destinations = destination::all();
        $full = recit::with('user','destination','image')->get();
        return view('blog',["full"=>$full,"destinations"=>$destinations]);
    }

    public function filterASC(Request $request){
        $users = User::all();
        $recits = recit::all();
        $image = image::all();
        $destinations = destination::all();
    
        $full = recit::with('user', 'destination', 'image')->orderBy('created_at', 'asc')->get();
        return view('blog', ["full" => $full, "destinations" => $destinations]);
    }

    public function filterDESC(Request $request){
        $users = User::all();
        $recits = recit::all();
        $image = image::all();
        $destinations = destination::all();
    
        $full = recit::with('user', 'destination', 'image')->orderBy('created_at', 'desc')->get();
        return view('blog', ["full" => $full, "destinations" => $destinations]);
    }
    
}
