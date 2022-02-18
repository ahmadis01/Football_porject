<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Team;
use App\Models\Fmatch;
use App\Models\Player;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        date_default_timezone_set('Asia/Damascus');
        $next_matches=Fmatch::whereDate('date',date('Y-m-d'))->whereTime('time','>',date('h'))->get();
        $current_matches=Fmatch::whereDate('date',date('Y-m-d'))->whereTime('time','<=',date('H:i:s'))->get();
        $teams=Team::latest()->get();
        return view('home',compact('teams','next_matches','current_matches'));
    }
    

}
