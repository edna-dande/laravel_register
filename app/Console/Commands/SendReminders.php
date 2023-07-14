<?php

namespace App\Console\Commands;

use App\Models\Event;
use App\Notifications\EventReminderNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class SendReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:send-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminders for upcoming events.';

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
        $events = Event::whereDate('lead_date', now()->format('Y-m-d'))->get();
    
        foreach ($events as $event) {
            $owner = $event->owner;
            $attendees = $event->attendees;

            Notification::send($owner, new EventReminderNotification($event));
            Notification::send($attendees, new EventReminderNotification($event));

        }
    
        $this->info('Event reminders sent successfully.');
    }
}
