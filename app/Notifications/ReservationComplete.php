<?php

namespace App\Notifications;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReservationComplete extends Notification
{
    use Queueable;

    private Reservation $reservation;
    /**
     * Create a new notification instance.
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting('Hello! '.$this->reservation->first_name.' '.$this->reservation->last_name)
                    ->line('This to confirm you that your reservation of '.$this->reservation->number_of_tickets.' tickets for the event '.$this->reservation->event->event_name.' has been completed successfully.')
                    ->line('Furthermore if there are any updates regarding the event, we will notify you by a email to this email address: '.$this->reservation->email)
                    ->line('Thank you for your reservation!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
