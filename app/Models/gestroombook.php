<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gestroombook extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_room(){
        return $this->belongsTo(rome::class, 'room_id');
    }
}
