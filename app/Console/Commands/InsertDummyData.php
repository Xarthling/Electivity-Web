<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Consumption;
use App\Models\RealtimeUsage;

use Carbon\Carbon;

class InsertDummyData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:dummy-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate and save dummy data in the realtime_usages table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Define the start and end timestamps
        $startTimestamp = Carbon::now()->subHours(24); // Adjust as needed
        $endTimestamp = Carbon::now();

        // Loop through each minute interval
        while ($startTimestamp <= $endTimestamp) {
            // Generate random usage data
            $usage = mt_rand(0, 100); // Assuming usage is between 0 and 100

            // Save the data to the database
            RealtimeUsage::create([
                'timestamp' => $startTimestamp,
                'usage' => $usage,
            ]);

            // Move to the next minute
            $startTimestamp->addMinute();
        }

        $this->info('Dummy data generated and saved successfully.');

        return 0;
    }
}
// class InsertDummyData extends Command
// {
//     protected $signature = 'insert:dummy-data';
    
//     protected $description = 'Insert dummy data into the consumption table for one year';

//     public function handle()
//     {
//         $startDate = Carbon::now()->subYear(); // Start from one year ago
//         $endDate = Carbon::now(); // Current date

//         $dates = [];
//         for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
//             $dates[] = $date->toDateString();
//         }

//         // Insert dummy data for each day
//         foreach ($dates as $date) {
//             $consumption = rand(10, 100); // Random consumption value, adjust range as needed

//             Consumption::create([
//                 'date' => $date,
//                 'consumption' => $consumption,
//             ]);
//         }

//         $this->info('Dummy data inserted successfully.');
//     }
// }
