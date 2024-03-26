<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\messageTemplateMail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    protected $primary_email;
    protected $emails;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details, $primary_email, $emails = [])
    {
        $this->details       = $details;
        $this->primary_email = $primary_email;
        $this->emails        = $emails;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->primary_email)->cc($this->emails)->send(new messageTemplateMail($this->details));
    }
}
