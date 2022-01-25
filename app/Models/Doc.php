<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    
    protected $Doc = [];
    use HasFactory;
    public function user(){


        return $this->belongsTo(User::class);
    }
}
