<?php

namespace App\Console\Commands;

use App\Jobs\MonitorDomainStatus;
use App\Models\Endpoint;
use Illuminate\Console\Command;

class MonitorDomainStatuses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monitor:domains';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Monitor the domain expiration dates.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $endpoints = Endpoint::all();

        foreach ($endpoints as $endpoint) {
            MonitorDomainStatus::dispatch($endpoint);
        }

        return Command::SUCCESS;
    }
}
