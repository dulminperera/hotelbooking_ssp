<?php

namespace App\Http\Livewire;

use App\Models\Reservation;
use Livewire\Component;

class EventReservationForm extends Component
{

    public $event;

    public $user;

    public Reservation $reservation;

    protected $rules = [
        'reservation.first_name' => 'required|string',
        'reservation.last_name' => 'required|string',
        'reservation.email' => 'required|email',
        'reservation.phone_number' => 'required|string',
        'reservation.number_of_tickets' => 'required|integer',
        'reservation.card_number' => 'required|string',
        'reservation.expiry_date' => 'required|string',
        'reservation.cvv' => 'required|string',
    ];

    public function mount($event)
    {
        $this->event = $event;
        $this->user = auth()->user();
        $this->reservation = new Reservation();
    }

    public function createReservation()
    {
        $this->validate();

        $this->reservation->event_id = $this->event->id;

        $this->reservation->user_id = $this->user->id;

        $this->reservation->save();

        $this->emit('reservationCreated');

        $this->event->increment('subscription_count');

        //show a sucess message
        session()->flash('message', 'Reservation created successfully');

        //get the current default user
        $user = auth()->user();

        //send a notification to the user
        $user->notify(
            (new \App\Notifications\ReservationComplete($this->reservation))
        );

        //redirect to the event page
        return redirect()->route('event.show', $this->event->id);
    }

    public function render()
    {
        return view('livewire.event-reservation-form');
    }
}
