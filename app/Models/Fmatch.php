<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fmatch extends Model
{
    use HasFactory;
    protected $fillable =[
        'team1' ,
        'team2' ,
        'date',
    ];
    public function players(){
        return $this->belongsToMany(Player::class,'match_players');
    }
}
