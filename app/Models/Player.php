<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable =[
        'name' ,
        'number',
        'nationality',
        'position_id'
    ];
    public function position(){
        return $this->belongsTo(Position::class);
    }
    public function matches(){
        return $this->belongsToMany(Fmatch::class);
    }
}
