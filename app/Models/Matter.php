<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    use HasFactory;

    //many-to-many matter-to-group relationship
    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
}
