<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    
    //many-to-many user-to-group relationship
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    //many-to-many matter-to-group relationship
    public function matters()
    {
        return $this->belongsToMany(Matter::class);
    }

    //one-to-many relationship of the student to the group
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
