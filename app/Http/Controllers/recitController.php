<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recit;

class recitController extends Controller
{
    public function insert(Request $request){
        $name = $request->name;
        $dest = $request->destination;
        $text = $request->text;
        $user = 2;

        recit::create([
            'RecitName' => $name,
            'DestinationId'=>$dest,
            'RecitContent' => $text,
            'UserId' => $user,
        ]);
        return redirect()->route('blog');
    }

}
