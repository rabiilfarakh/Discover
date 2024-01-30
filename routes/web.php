<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/blog',[blogController::class,'index']);
Route::get('/blog',[userController::class,'index']);
// Route::get('/blog/{nom}/{prenom}', function (Request $request) {
//     dd($request->nom);
//     return view('blog', ['nom' => $request->nom, 'prenom' => $request->prenom]);
// });  

