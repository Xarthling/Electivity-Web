<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; 

    public function rooms()
    {
        return $this->hasMany(Rooms::class, 'boardid', 'id');
    }
    public function switches()
    {
        return $this->hasMany(Switches::class, 'boardid', 'id');
    }
}