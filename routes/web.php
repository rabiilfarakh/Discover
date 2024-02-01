<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\userController;
use App\Http\Controllers\recitController;
use App\Http\Controllers\destinationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/blog',[blogController::class,'index'])->name('blog');
// Route::get('/blog/show',[destinationController::class,'showForm'])->name('show');
Route::post('/blog/insert',[recitController::class,'insert'])->name('insert');
  

