<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Fmatch;
use App\Models\Position;
use App\Models\MatchPlayers;

class MatchController extends Controller
{
    public function AllMatches(){
        $matches=Fmatch::all();
        return response()->json($matches);
    }


    public function ShowMatch($id){
        $match=Fmatch::find($id);
        return response()->json($match);
    }
    public function AddMatch(Request $request){
        $validateData=$request->validate([
            'team1' => 'required|string|max:255',
            'team2' => 'required|string|max:255',
            'date' => 'required'
        ]);
        $match=Fmatch::create([
            'team1' => $request->team1,
            'team2' => $request-> team2,
            'date' => $request->date
        ]);
        return response()->json($match);
    }
    public function UpdateMatch(Request $request, $id){
        $validateData=$request->validate([
            'team1' => 'required|string|max:255',
            'team2' => 'required|string|max:255',
            'date' => 'required'
        ]);
        $match=Fmatch::find($id)->update([
            'team1' => $request->team1,
            'team2' => $request-> team2,
            'date' => $request->date
        ]);
        return response()->jsonn('success');
    }
    public function DeleteMatch($id){
        Fmatch::find($id)->delete();
        return response()->json('success');
    }
    public function DitailsMatch($id){
        
        $positions=Position::all();
        $playersmatch=Fmatch::find($id);
        return response()->json($playersmatch,$positions);
    }


    public function AddDitailsMatch(Request $request,$id){
        
        if(Player::where('name',$request->name)->exists())
        {
            $player=Player::where('name',$request->name)->first();
            $data=MatchPlayers::create([
                'player_id' =>$player->id,
                'fmatch_id' => $id,
                'position_id' =>$request->position,
            ]);
        }
        else {
            $player=Player::create([
                'name' => $request->name,
                'position_id' =>$request->position,
            ]);
            $data=MatchPlayers::create([
                'player_id' =>$player->id,
                'fmatch_id' => $id,
                'position_id' =>$request->position
            ]);
        }
        return response()->json($data);
        
    }
}
