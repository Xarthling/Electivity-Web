<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; 

    public function board()
    {
        return $this->belongsTo(Board::class, 'boardid', 'id');
    }
}