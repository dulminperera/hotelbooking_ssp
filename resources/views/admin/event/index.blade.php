<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- <div class="mx-auto sm:px-6 lg:px-0 flex justify-start ml-110">
            <div>
                <h1 class="flex justify-start ml-20 mt-8 mb-5 text-base font-semibold leading-6 text-gray-900">Events</h1>
                <p class="flex justify-start ml-20 mt-2 px-50 text-sm text-gray-700">
                    A list of all the events in the system.
                </p>
            </div> --}}
            <div class="flex justify-end mr-14 mt-8 mb-5">
                <a href="{{ route('admin.events.create') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-2">Create New
                    Event</a>
            </div>
        {{-- </div> --}}


        <div class="mx-auto sm:px-6 lg:px-0 flex justify-center">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg max-w-8xl">
                <x-table class="flex justify-start">
                    <x-slot name="head">
                        <x-th>Hotel Name</x-th>
                        <x-th class=" w-20">Image</x-th>
                        <x-th>Category</x-th>
                        <x-th>Venue</x-th>
                        <x-th>Address</x-th>
                        <x-th>Date</x-th>
                        <x-th>Time</x-th>
                        <x-th>Price Per Ticket</x-th>
                        <x-th>Actions</x-th>
                        <x-th></x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($events as $event)
                            <x-tr>
                                <x-td>{{ $event->event_name }}</x-td>
                                <x-td class=" w-20">
                                    @if ($event->hasMedia('image'))
                                        <img src="{{ $event->getFirstMediaUrl('image') }}" alt="{{ $event->event_name }}"/>
                                    @else
                                        -
                                    @endif
                                </x-td>
                                <x-td>{{ $event->category->name}}</x-td>
                                <x-td>{{ $event->venue }}</x-td>
                                <x-td>{{ $event->address }}</x-td>
                                <x-td>{{ $event->date }}</x-td>
                                <x-td>{{ $event->time }}</x-td>
                                <x-td>{{ $event->price_per_ticket }}</x-td>
                                <x-td class="flex items-center justify-start">
                                    <a href="{{ route('admin.events.edit', $event->id) }}"
                                        class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                    <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this event?')"
                                            class="text-indigo-600 hover:text-indigo-900">
                                            Delete
                                        </button>
                                    </form>
                                </x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>
