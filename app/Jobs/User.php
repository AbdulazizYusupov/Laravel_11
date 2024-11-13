<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class User implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        for ($i = 1; $i < 300000; $i++) {
            Job::create(['user_name' => $this->data . ' - ' . $i]);
        }
    }
}
