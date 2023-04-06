<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //The student relationship through group, matter has many qualifications
    public function qualifications()
    {
        return $this->hasManyThrough(Qualification::class, Group::class, 'student_id', 'group_id')
                    ->join('matters', 'groups.matter_id', '=', 'matters.id')
                    ->select('qualifications.*', 'matters.name as matter_name');
    }
}
