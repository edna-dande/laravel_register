<?php

namespace App\Notifications;

use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EventReminderNotification extends Notification
{
    use Queueable;

    protected $event;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $eventName = $this->event->name;
        $eventDate = $this->event->start_date->format('Y-m-d');
        $eventTime = $this->event->start_date->format('H:i');

        return (new MailMessage)
            ->subject('Event Reminder: ' . $eventName)
            ->greeting('Hello!')
            ->line('Just a friendly reminder about the upcoming event:')
            ->line('Event: ' . $eventName)
            ->line('Date: ' . $eventDate)
            ->line('Time: ' . $eventTime)
            ->action('View Event Details', route('events.show', $this->event))
            ->line('Thank you for your attention.')
            ->view('event_reminder', ['event' => $event]);

            
            
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
