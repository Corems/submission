<?php

namespace App\Jobs;

use App\Events\SubmissionSaved;
use App\Models\Submission;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class ProcessSubmission implements ShouldQueue
{
    use Queueable;
    public $submissionData;

    /**
     * Create a new job instance.
     */
    public function __construct($submissionData)
    {
        $this->submissionData = $submissionData;
    }


    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $submission = Submission::create([
                'name'    => $this->submissionData['name'],
                'email'   => $this->submissionData['email'],
                'message' => $this->submissionData['message'],
            ]);

            event(new SubmissionSaved($submission));
        } catch (\Exception|\Error $exception) {
            Log::channel('failed_submits')->error($exception->getMessage());
            throw $exception;
        }
    }
}
