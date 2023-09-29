<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $event->event_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
            @if (session('message'))
            <script>
                Swal.fire(
                'Thank You!',
                '{{ session('message') }}',
                'success'
                )
            </script>
            @endif
          <div class="flex flex-col w-full bg-white rounded shadow-lg sm:w-6/4 md:w-3/2 lg:w-6/5">
            <div class="w-full h-90 bg-top bg-cover rounded-t">
                <img src="{{ $event->getFirstMediaUrl('image') }}" class="w-full" >
              </div>
              <div class="flex flex-col w-full md:flex-row border-b">
                <div class="flex flex-row justify-around p-4 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded md:flex-col md:items-center md:justify-center md:w-1/4">
                    <div class="md:text-3xl">{{ $event->date }}</div> <!-- Added md:text-3xl for bigger font size -->
                    <div class="md:text-xl">{{ $event->time }}</div> <!-- Added md:text-xl for bigger font size -->
                </div>
              <div class="p-4 font-normal text-gray-800 md:w-3/4">
                <br><br>
                <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">{{ $event->event_name }}</h1>
                <div class="flex flex-row items-center mt-4 text-gray-700">
                    <br>
                </div>
              </div>
            </div>
            <div class="p-6 border-b">
                <h2 class="text-2xl ">
                    Hotel Analytics
                </h2>
            </div>

            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Number of Views
                </p>
                <p>
                     {{ $event->view_count }}
                </p>
            </div>
            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Number of Booked Users
                </p>
                <p>
                     {{ $event->subscription_count }}
                </p>
            </div>
            <div class="p-6 border-b">
                <h2 class="text-2xl ">
                    Information
                </h2>
                <p class="text-sm text-gray-500">
                    Hotel details.
                    </p>
            </div>
            <div>
            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Hotel Name
                </p>
                <p>
                    {{ $event->event_name }}
                </p>
            </div>
            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Venue
                </p>
                <p>
                    {{ $event->venue }}
                </p>
            </div>

            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Address
                </p>
                <p>
                    {{ $event->address }}
                </p>
            </div>
            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Category
                </p>
                <p>
                    {{ $event->category->name}}
                </p>
            </div>

            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Description
                </p>
                <p>
                    {{ $event->description }}
                </p>
            </div>
            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Price per Room
                </p>
                <p>
                    {{ $event->price_per_ticket }}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Book Hotel
                <p>
                    <a href="{{ route('event.reservation', $event->id) }}">
                        <button class="w-full rounded-md bg-indigo-600 py-2 text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75">Reserve</button>
                    </a>
                </p>
            </div>

            <div class="bg-white">
                <div class="px-6 pt-6">

                    @livewire('event-reviews',
                    ['event' => $event,
                    ])

                    @auth
                        @livewire('create-event-review',
                        ['event' => $event,
                        ])
                    @endauth

                    @guest
                        <div class="flex justify-center pt-10 pb-10" >
                            <a href="{{ route('login') }}">
                                <button class="w-60 rounded-md bg-green-500 py-2 text-white-100 hover:bg-white-500 hover:shadow-md duration-75">Login to leave a review</button>
                            </a>
                        </div>
                    @endguest

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</x-app-layout>
