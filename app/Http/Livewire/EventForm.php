<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;


class EventForm extends Component
{

    use WithFileUploads;

    public $event;

    public $categories;

    public $image;

    protected $rules = [
        'event.category_id' => 'required',
        'event.event_name' => 'required',
        'event.description' => 'required',
        'event.venue' => 'required',
        'event.address' => 'required',
        'event.date' => 'required',
        'event.time' => 'required',
        'event.price_per_ticket' => 'required',
    ];

    public function mount($event)
    {
        $this->event = $event;

        $this->categories = \App\Models\Category::all();
    }

    public function submit()
    {
        $this->validate();

        $this->event->save();

        // check if there is an image
        //if so, add it to the event

        if ($this->image) {

            //clear the media collection
            $this->event->clearMediaCollection('image');

            $this->event->addMedia($this->image->getRealPath())->toMediaCollection('image');
        }

        return redirect()->route('admin.events.index');

    }

    public function render()
    {
        return view('livewire.event-form');
    }
}
