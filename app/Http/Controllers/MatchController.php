<?php

namespace App\Http\Controllers;
use App\Models\Fmatch;
use App\Models\MatchPlayers;
use App\Models\Position;
use App\Models\Player;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function AllMatches(){
        $matches=Fmatch::latest()->paginate(5);
        return view('match.index',compact('matches'));
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
        return redirect()->back();
    }
    public function EditMatch($id){
        $match=Fmatch::find($id);
        return view('match.edit',compact('match'));
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
        return redirect()->route('all.matches');
    }
    public function DeleteMatch($id){
        Fmatch::find($id)->delete();
        return redirect()->back();
    }
    public function DitailsMatch($id){
        
        $positions=Position::all();
        $playersmatch=Fmatch::find($id);
        return view('match.ditails',compact('playersmatch','positions'));
    }


    public function AddDitailsMatch(Request $request,$id){
        
        if(Player::where('name',$request->name)->exists())
        {
            $player=Player::where('name',$request->name)->first();
            MatchPlayers::create([
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
            MatchPlayers::create([
                'player_id' =>$player->id,
                'fmatch_id' => $id,
                'position_id' =>$request->position
            ]);
        }
        return redirect()->back();
        
    }
}
