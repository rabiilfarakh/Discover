<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recit;
use App\Models\Destination;
use App\Models\image;

class recitController extends Controller
{
    public function insert(Request $request)
    {
        $name = $request->name;
        $dest = $request->destination;
        $text = $request->text;
        $user = 2;
    
        $recit = recit::create([
            'RecitName' => $name,
            'DestinationId' => $dest,
            'RecitContent' => $text,
            'UserId' => $user,
        ]);
    
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $img) {
                $images[] = ['recit_id' => $recit->id, 'Image' => $img->store('images', 'public')];
            }
    
            image::insert($images);
        }
    
        return redirect()->route('blog');
    }
    

    public function index(Request $request)
    {

        $destinations = $request->input('destination');
        $recits = recit::where('DestinationId', $destinations)->get();
        
        return view('recit', [
            "recits" => $recits,
            "destinations" => Destination::all()]);
    }
}
