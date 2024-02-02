<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\userController;
use App\Http\Controllers\recitController;
use App\Http\Controllers\destinationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/blog',[blogController::class,'index'])->name('blog');
Route::post('/blog/recit', [recitController::class, 'index'])->name('recit');
Route::post('/blog/filterASC', [blogController::class, 'filterASC'])->name('filterASC');
Route::post('/blog/filterDESC', [blogController::class, 'filterDESC'])->name('filterDESC');
Route::post('/blog/insert',[recitController::class,'insert'])->name('insert');

  

