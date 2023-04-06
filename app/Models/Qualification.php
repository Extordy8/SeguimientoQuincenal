<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    //many-to-one relationship between qualification and matter
    public function matter()
    {
        return $this->belongsTo(Matter::class);
    }

    //many-to-one relationship between qualification and student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    //many-to-one relationship between qualification and group
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
