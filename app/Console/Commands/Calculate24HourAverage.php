<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\RealtimeUsage;
use App\Models\Consumption;
use Carbon\Carbon;

class Calculate24HourAverage extends Command
{
    protected $signature = 'calculate:24houraverage';
    protected $description = 'Calculate the average value of real-time usage for the last 24 hours and save it in the consumption table';

    public function handle()
    {
        $startTimestamp = Carbon::now()->subHours(24);
        $endTimestamp = Carbon::now();

        $realtimeUsages = RealtimeUsage::whereBetween('timestamp', [$startTimestamp, $endTimestamp])->get();

        $average = $realtimeUsages->avg('usage');

        Consumption::create([
            'date' => Carbon::now()->toDateString(),
            'consumption' => $average,
        ]);

        RealtimeUsage::whereBetween('timestamp', [$startTimestamp, $endTimestamp])->delete();
        
        $this->info('24-hour average calculated and saved successfully.');
    }
}
