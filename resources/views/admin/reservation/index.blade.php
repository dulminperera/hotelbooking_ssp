<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bookings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-0 flex justify-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg max-w-8xl">
                <x-table class="flex justify-start">
                    <x-slot name="head">
                        <x-th>Hotel Name</x-th>
                        <x-th>First Name</x-th>
                        <x-th>Last Name</x-th>
                        <x-th>Number of Rooms</x-th>
                        <x-th>Email</x-th>
                        <x-th>Phone Number</x-th>
                        <x-th>Created At</x-th>
                        <x-th></x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($reservations as $reservation)
                            <x-tr>
                                <x-td>{{ $reservation->event->event_name}}</x-td>
                                <x-td>{{ $reservation->first_name }}</x-table.cell>
                                <x-td>{{ $reservation->last_name}}</x-td>
                                <x-td>{{ $reservation->number_of_tickets }}</x-td>
                                <x-td>{{ $reservation->email }}</x-td>
                                <x-td>{{ $reservation->phone_number }}</x-td>
                                <x-td>{{ $reservation->created_at->format('d/m/Y h:ia') }}</x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>

