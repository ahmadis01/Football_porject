<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function AllTeams(){
        $teams=Team::latest()->paginate(5);
        return view('team.index',compact('teams'));
    }
    public function AddTeam(Request $request){
        $validateData=$request->validate([
            'name' => 'required|string',
            'coach' => 'string'
        ]);
        $team=Team::create([
            'name' => $request->name,
            'coach' => $request->coach,
        ]);
        return redirect()->route('all.teams');
    }
    public function EditTeam($id)
    {
        $team=Team::find($id);
        return view('team.edit',compact('team'));
    }
    public function UpdateTeam(request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'coach' => 'string',
            'played' => 'integer',
            'wins' => 'integer',
            'losses' => 'integer',
            'draws' => 'integer',
            'points' => 'integer',
            'rank' => 'integer'
        ]);
        $team=team::find($id)->update([
            'name' => $request->name,
            'coach' => $request->coach,
            'played' => $request->played,
            'wins' => $request->wins,
            'losses' => $request->losses,
            'draws' => $request->draws,
            'points' => $request->points,
            'rank' => $request->rank
        ]);
        return redirect()->route('all.teams');
    }
    public function DeleteTeam($id)
    {
        team::find($id)->delete();
        return redirect()->back();
    } 
}
