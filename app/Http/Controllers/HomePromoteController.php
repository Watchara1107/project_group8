<?php

namespace App\Http\Controllers;
use App\Models\Promotion;
use App\Models\Player;
use App\Models\Room;

class HomePromoteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('promotepage.home')
        ->with("promotion",Promotion::all())
        ->with("player",Player::all())
        ->with("room",Room::all());
    }
    public function admin(){
        return view('admin.index')
        ->with("promotion",Promotion::all())
        ->with("player",Player::all())
        ->with("room",Room::all());
    
    }
}
