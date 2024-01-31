<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recit extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,"id");
    }

    public function destination(){
        return $this->belongsTo(destination::class , 'DestinationId');
    }

    public function image(){
        return $this->hasMany(image::class);
    }

}
