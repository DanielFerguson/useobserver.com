<?php

namespace App\Jobs;

use App\Models\Endpoint;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\SslCertificate\SslCertificate;

class MonitorCertificate implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private Endpoint $endpoint)
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $certificate = SslCertificate::createForHostName($this->endpoint->base_url);

        $this->endpoint->certificate_expires_at = $certificate->expirationDate();
        $this->endpoint->save();
    }
}
