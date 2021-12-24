<?php

namespace App\Http\Controllers;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function AllPositions(){
        $positions=Position::latest()->paginate(5);
        return view('position.index',compact('positions'));
    }
    public function AddPosition(request $request)
    {
        $validateData = $request->validate([
            'position' => 'required|string|unique:positions',
        ]);
        $position = Position::create([
            'position' => $request->position,
        ]);
        return redirect()->back();
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
        return redirect()->route('all.positions');
    }
    public function DeletePosition($id)
    {
        Position::find($id)->delete();
        return redirect()->back();
    }
}
