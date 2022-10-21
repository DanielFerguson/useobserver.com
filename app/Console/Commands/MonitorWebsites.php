<?php

namespace App\Console\Commands;

use App\Jobs\MonitorWebsite;
use App\Models\Endpoint;
use Illuminate\Console\Command;

class MonitorWebsites extends Command
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
        // NOTE: This is a local-only command
        if ($this->app->isProduction()) {
            return;
        }

        $endpoints = Endpoint::all();

        foreach ($endpoints as $endpoint) {
            MonitorWebsite::dispatch($endpoint);
        }

        return Command::SUCCESS;
    }
}
