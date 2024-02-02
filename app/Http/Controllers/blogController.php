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
        $order = $request->input('order');
     
        $full = recit::with('user','destination','image');

        $full=match($order){
            "desc"=>$full->oldest("RecitDate"),
            default =>$full->latest("RecitDate")
        };
        $full=$full->get();

        return view('blog',["full"=>$full,"destinations"=>$destinations]);
    }

    public function filter(Request $request){
        dd($request);
        $users = User::all();
        $recits = recit::all();
        $image = image::all();
        $destinations = destination::all();

        $order = $request->input('order');

        if($order == "asc"){

            $full = recit::with('user', 'destination', 'image')->orderBy('created_at', 'asc')->get();
            return view('blog', ["full" => $full, "destinations" => $destinations]);

        }else if($order == "desc"){

            $full = recit::with('user', 'destination', 'image')->orderBy('created_at', 'desc')->get();
            return view('blog', ["full" => $full, "destinations" => $destinations]);
        }
    }

    
}
