<?php

namespace App\Console\Commands;

use App\Jobs\MonitorCertificate;
use App\Models\Endpoint;
use Illuminate\Console\Command;

class MonitorCertificates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monitor:certificates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Monitor the certificate statuses of endpoints.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $endpoints = Endpoint::all();

        foreach ($endpoints as $endpoint) {
            MonitorCertificate::dispatch($endpoint);
        }

        return Command::SUCCESS;
    }
}
