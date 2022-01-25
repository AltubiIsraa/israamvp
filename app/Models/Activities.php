<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;
    protected $fillable = [ 'title', 'subject_id', 'grade_id', 'description'];

public function subject()
{
    return $this->hasMany(Subjects::class);

}
}

