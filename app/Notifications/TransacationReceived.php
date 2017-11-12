<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TransacationReceived extends Notification
{
    use Queueable;


    public function __construct($thread)
    {
        $this->thread=$thread;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'repliedTime'=> Carbon::now();
        ];
    }

    public function toArray($notifiable)
    {
        return [
            
        ];
    }
}
