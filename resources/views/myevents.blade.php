<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Bookings') }}
        </h2>
    </x-slot>

    <div class="bg-indigo-50 px-4 py-8">
        <div class="container mx-auto">

            <div class="grid grid-cols-4 gap-6">

                @forelse ($events as $event)
                    @livewire('event-card', [
                        'event' => $event
                    ])
                @empty
                    <p>No hotels Booked</p>
                @endforelse
            </div>

        </div>
      </div>
</x-app-layout>
