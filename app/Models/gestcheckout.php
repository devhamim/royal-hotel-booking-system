<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gestcheckout extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    function rel_to_room(){
        return $this->belongsTo(rome::class, 'room_id');
    }
    function rel_to_gestroom(){
        return $this->belongsTo(gestroombook::class, 'gest_id');
    }
}
