<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function User(){
        return $this->belongsTo(User::class);
    }
    
    use HasFactory;
}
