<?php

namespace App\Console\Commands;

use App\Models\Maintenance;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Twilio\Rest\Client;

class UpcomingMaintenance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upcoming:maintenance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $maintenances = Maintenance::whereBetween(
            'created_at',
            [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
        )
            ->get();

        try {
            foreach ($maintenances as $maintenance) {
                $client = new Client('AC37b64ce54f4c052648d1d95b8dc207cd', 'fd08c8d56712d5011e9670983cc79c62');
                $client->messages->create(
                    // Where to send a text message
                    $maintenance->user->mobile_number,
                    array(
                        'from' => '+13855190363',
                        'body' => 'You Have Upcoming Maintenance in ' . $maintenance->due_date
                    )
                );
            }
        } catch (Exception $e) {
            dd("Error: " . $e->getMessage());
        }
    }
}
