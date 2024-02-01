<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recit extends Model
{
    use HasFactory;

    protected $fillable = [
        'RecitName',
        'DestinationId',
        'RecitContent',
        'UserId',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, "id");
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'DestinationId');
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
