<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Position;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function AllPlayers()
    {
        $players = Player::latest()->paginate(5);
        $positions = Position::all();
        return view('player.index', compact('players', 'positions'));
    }
    public function AddPlayer(request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
        ]);
        $player = Player::create([
            'name' => $request->name,
            'position_id' => $request->position
        ]);
        return redirect()->back();
    }
    public function EditPlayer($id)
    {
        $player=Player::find($id);
        $positions=Position::all();
        return view('player.edit',compact('player','positions'));
    }
    public function UpdatePlayer(request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
        ]);
        $player=Player::find($id)->update([
            'name' => $request->name,
            'position_id' => $request-> position,
        ]);
        return redirect()->route('all.players');
    }
    public function DeletePlayer($id)
    {
        Player::find($id)->delete();
        return redirect()->back();
    }
}
