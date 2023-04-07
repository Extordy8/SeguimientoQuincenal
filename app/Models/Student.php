<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // La relación "belongsTo"
public function group()
{
    return $this->belongsTo(Group::class);
}

// La relación "hasManyThrough"
public function qualificationsForMatter($matter_id)
{
    return Qualification::whereHas('group', function ($query) use ($matter_id) {
            $query->where('matter_id', $matter_id);
        })->where('student_id', $this->id)->get();
}
}
