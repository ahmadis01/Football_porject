<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
    public function AllPositions(){
        $positions=Position::all();
        return response()->json($positions);
    }
    public function ShowPosition($id){
        $position=Position::find($id);
        return response()->json($position);
    }
    public function AddPosition(request $request)
    {
        $validateData = $request->validate([
            'position' => 'required|string|unique:positions',
        ]);
        $position = Position::create([
            'position' => $request->position,
        ]);
        return response()->json($position);
    }
    public function EditPosition($id)
    {
        $position=Position::find($id);
        return view('position.edit',compact('position'));
    }
    public function UpdatePosition(request $request, $id)
    {
        $validateData = $request->validate([
            'position' => 'required|string',
        ]);
        $position=Position::find($id)->update([
            'position' => $request->position,
        ]);
        return response()->json('success');
    }
    public function DeletePosition($id)
    {
        Position::find($id)->delete();
        return response()->json('success');
    }
}
