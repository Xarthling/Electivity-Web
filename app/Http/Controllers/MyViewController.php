<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Board;
use App\Models\Consumption;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use App\Models\Switches;

use Illuminate\Http\Request;

class MyViewController extends Controller
{
    public function dashboard(Request $request)
    {
        if (!Session::has('username')) {
            return redirect()->route('login')->with('error', 'You must be logged in to access the dashboard.');
        }

        $userName = Session::get('username');

        $rooms = Rooms::with('board')->get()->map(function ($room) {
            return [
                'boardid' => $room->boardid,
                'roomname' => $room->roomname,
                'temp' => $room->temp,
                'lumn' => $room->lumn,
                'moist' => $room->moist,
            ];
        });


        $switches = Board::with('switches')->get()->map(function ($board) {
            return $board->switches->map(function ($switch) {
                return [
                    'name' => $switch->name,
                    'state' => $switch->state ? 'On' : 'OFF',
                    'boardId' => $switch->boardid,
                ];
            });
        });
        $consumptions = Consumption::pluck('consumption')->toArray();
        $graph = $consumptions;
        $total = array_sum($graph);
        return view('pages.Dashboard', compact('rooms', 'switches', 'graph', 'total', 'userName'));
    }


    public function updateSwitchStates(Request $request)
    {
        $boardId = $request->input('boardId');
        $switches = Switches::whereHas('board', function ($query) use ($boardId) {
            $query->where('boardid', $boardId);
        })->get()->map(function ($switch) {
            return [
                'name' => $switch->name,
                'state' => $switch->state ? 'On' : 'OFF',
                'boardId' => $switch->board_id, 
            ];
        });
    
        return response()->json($switches);
    }
    

    public function index()
    {               
        $userName = Session::get('user');
        return view('pages.index', compact('userName'));
    }

    public function view4()
    {   $userName = Session::get('username');
        return view('pages.view4', compact('userName'));
    }

    public function view5()
    {
        $userName = Session::get('username');
        $user = User::where('username', $userName)->first();
    
        if (!$user) {
        
            return redirect()->back()->withErrors(['error' => 'User not found']);
        }
    
        return view('pages.profile', compact('userName', 'user'));
    }

    public function view6()
    {
        return view('pages.view6');
    }
}
