<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Make a Reservation to the Hotel {{ $event->event_name }}
        </h2>
    </x-slot>


    <div class="px-4 py-8">
        <div class="container mx-auto">
            @livewire('event-reservation-form',[
            'event' => $event,
            ])
        </div>
    </div>
</x-app-layout>
