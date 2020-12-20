<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\MailSenderJob;
use App\Models\Subscription;

class NewsLetter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news:letter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Respectively send newsletters to subscribed users every second Tuesday of every month via email.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $subscribers = Subscription::all();
        foreach ($subscribers as $subscriber) {
            MailSenderJob::dispatch($subscriber,new MailSenderJob($subscriber));
        }
        $this->info('Thanks for subscribing.');
    }
}
