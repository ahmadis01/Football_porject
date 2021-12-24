<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Position;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function AllPlayers()
    {
        $players = Player::all();
        return response()->json($players);
    }
    public function ShowPlayer($id){
        $player=Player::find($id);
        return response()->json($player);
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
        return response()->json($player);
    }
    public function EditPlayer($id)
    {
        $player=Player::find($id);
        $positions=Position::all();
        return response()->json($player);
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
        return response()->json('success');
    }
    public function DeletePlayer($id)
    {
        Player::find($id)->delete();
        return response()->json('success');
    }
}
