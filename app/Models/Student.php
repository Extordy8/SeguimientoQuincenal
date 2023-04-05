<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //many-to-one relationship between qualification and student
    public function qualifications()
    {
        return $this->hasMany(Qualification::class);
    }
}
