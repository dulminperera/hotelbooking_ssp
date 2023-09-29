<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="bg-indigo-50 px-4 py-8">
        <div class="container mx-auto">

            <div class="grid grid-cols-4 gap-6">

                @foreach ($events as $event )
                @livewire('event-card',[
                    'event' => $event,
                ])
                @endforeach
            </div>
        </div>
      </div>
</x-app-layout>
