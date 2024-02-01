<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\userController;
use App\Http\Controllers\recitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/blog',[blogController::class,'index'])->name('blog');
Route::post('/blog/insert',[recitController::class,'insert'])->name('insert');
  

