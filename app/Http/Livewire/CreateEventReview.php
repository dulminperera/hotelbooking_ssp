<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateEventReview extends Component
{
    public $event;

    public $rating = 2;

    public $title;

    public $comment;

    // create validations
    protected $rules = [
        'rating' => 'required|integer|min:1|max:5',
        'title' => 'required|min:5',
        'comment' => 'required|min:5'
    ];

    public function mount($event)
    {
        $this->event = $event;
    }

    public function save()
    {
        $this->validate();

        $this->event->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $this->rating,
            'title' => $this->title,
            'comment' => $this->comment
        ]);

        $this->emit('reviewCreated');
    }
}
