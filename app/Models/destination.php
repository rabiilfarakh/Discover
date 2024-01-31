<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    use HasFactory;

    public function recit(){
        return $this->hasMany(recit::class , 'id');
    }
}
