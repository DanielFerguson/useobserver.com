<?php

namespace App\Console\Commands;

use App\Models\Endpoint;
use Illuminate\Console\Command;

class MonitorEndpoints extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monitor:endpoints';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the necessarity jobs to monitor websites and add them to the queue.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $endpoints = Endpoint::all();

        foreach ($endpoints as $endpoint) {
            // TODO: Fire off job to check...
            // - up status, 
            // - speed 
            // - domain expiry date
            // - ssl certificate status and expiry date
            // - mx records setup (DKIM, SPF)
        }

        return Command::SUCCESS;
    }
}
