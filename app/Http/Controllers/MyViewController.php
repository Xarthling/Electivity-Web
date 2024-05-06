<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Board;
use App\Models\Consumption;
use App\Models\RealtimeUsage;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use App\Models\Switches;
use Illuminate\Support\Facades\Log;
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
    public function getdata(Request $request)
    {
        // dd('ok');
        $selectedWeek = $request->input('week');
        $data = [];
        switch ($selectedWeek) {
            case '1': 
                $data = $this->generateDataForHours(24); // Pass the number of hours here
                break;
                case '2':
                    $data = $this->generateDataForDaysFromDatabase(7);
                break;
            case '3': 
                $data = $this->generateDataForMonthFromDatabase(30);
                break;
            case '4': 
                $data = $this->generateDataForYearFromDatabase(12);
                break;
            default:
                $data = ['error' => 'Invalid week selection'];
                break;
        }

        return $data;
    }

    public function generateDataForHours()
{
    try {
        // Initialize arrays for labels and values
        $labels = [];
        $values = [];

        // Get current timestamp
        $currentTimestamp = now();

        // Loop through the last 24 hours
        for ($i = 0; $i < 24; $i++) {
            // Calculate the start and end timestamps for the current hour
            $startTimestamp = $currentTimestamp->copy()->subHours($i)->startOfHour();
            $endTimestamp = $startTimestamp->copy()->endOfHour();

            // Fetch minute-wise data for the current hour from the database
            $minuteWiseData = RealtimeUsage::whereBetween('timestamp', [$startTimestamp, $endTimestamp])->get();

            // Calculate total usage and count for the current hour
            $totalUsage = $minuteWiseData->sum('usage');
            $totalCount = $minuteWiseData->count();

            // Calculate average usage for the current hour
            $averageUsage = $totalCount > 0 ? $totalUsage / $totalCount : 0;

            // Add the hour label and average usage value to the respective arrays
            $labels[] = $startTimestamp->format('H:00');
            $values[] = $averageUsage;
        }

        // Reverse the arrays to have the data in chronological order
        $labels = array_reverse($labels);
        $values = array_reverse($values);

        return ['labels' => $labels, 'values' => $values];
    } catch (\Exception $e) {
        // Log the error
        Log::error($e->getMessage());
        // Return an error response
        return ['error' => 'An error occurred while generating data for hours.'];
    }
}
    public function generateDataForDaysFromDatabase($numberOfDays)
    {
        $labels = [];
        $values = [];

        $startDate = Carbon::now()->subDays($numberOfDays)->startOfDay();
        $endDate = Carbon::now()->endOfDay();

        $consumptions = Consumption::whereBetween('date', [$startDate, $endDate])->orderBy('date')->get();

        $dateCursor = clone $startDate;
        while ($dateCursor <= $endDate) {
            $dayName = $dateCursor->format('l'); 
            $labels[] = $dayName;
            $formattedDate = $dateCursor->toDateString();
            $consumption = $consumptions->firstWhere('date', $formattedDate);
            $values[] = $consumption ? $consumption->consumption : 0;
            $dateCursor->addDay();
        }

        return ['labels' => $labels, 'values' => $values];
    }

    public function generateDataForMonthFromDatabase($numberOfDays)
    {
        $labels = [];
        $values = [];

        $startDate = Carbon::now()->subDays($numberOfDays - 1)->startOfDay();
        $endDate = Carbon::now()->endOfDay();

        $consumptions = Consumption::whereBetween('date', [$startDate, $endDate])
            ->orderBy('date')
            ->get();

        $dateCursor = clone $startDate;
        while ($dateCursor <= $endDate) {
            $labels[] = $dateCursor->toDateString();
            $formattedDate = $dateCursor->toDateString();
            $consumption = $consumptions->firstWhere('date', $formattedDate);
            $values[] = $consumption ? $consumption->consumption : 0;
            $dateCursor->addDay();
        }

        return ['labels' => $labels, 'values' => $values];
    }


    public function generateDataForYearFromDatabase($numberOfMonths)
    {
        $labels = [];
        $values = [];

        $endDate = Carbon::now()->endOfMonth();
        $startDate = Carbon::now()->subMonths($numberOfMonths - 1)->startOfMonth();

        $consumptions = Consumption::whereBetween('date', [$startDate, $endDate])
            ->orderBy('date')
            ->get()
            ->groupBy(function ($consumption) {
                return Carbon::parse($consumption->date)->format('F Y');
            });

        $dateCursor = clone $startDate;
        while ($dateCursor <= $endDate) {
            $monthYear = $dateCursor->format('F Y');
            $labels[] = $monthYear;
            $consumption = $consumptions[$monthYear] ?? collect([]);
            $values[] = $consumption->sum('consumption');
            $dateCursor->addMonth();
        }

        return ['labels' => $labels, 'values' => $values];
    }


    public function index()
    {
        $userName = Session::get('user');
        return view('pages.index', compact('userName'));
    }

    public function view4()
    {
        $userName = Session::get('username');
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
