<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Board;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use App\Models\Switches;

use Illuminate\Http\Request;

class MyViewController extends Controller
{
    public function Dashboard()
    {
        if (!Session::has('user')) {
            return redirect()->route('login')->with('error', 'You must be logged in to access the dashboard.');
        }
        $user = Session::get('user');
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
                ];
            });
        });

        $graph = [303, 150, 140, 220, 200, 180, 99];

        return view('pages.Dashboard', compact('rooms', 'switches', 'graph', 'user'));
    }

    public function index()
    {

        return view('pages.index');
    }

    public function view4()
    {
        return view('pages.view4');
    }

    public function view5()
    {
        if (!Session::has('user')) {
            return redirect()->route('login')->with('error', 'You must be logged in to access the dashboard.');
        }
        $user = Session::get('user');
        return view('pages.view5', compact('user'));
    }
    public function view6()
    {
        return view('pages.view6');
    }
}
