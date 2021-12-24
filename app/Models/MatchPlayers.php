<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchPlayers extends Model
{
    use HasFactory;
    protected $fillable =[
        'player_id',
        'fmatch_id',
        'position_id',
    ];
    
}
