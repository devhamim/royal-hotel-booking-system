<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // feature
    function rel_to_user(){
        return $this->belongsTo(User::class, 'added_by');
    }
}
