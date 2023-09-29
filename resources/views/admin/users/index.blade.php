<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="py-12">
                    <div class="mx-auto sm:px-6 lg:px-0 flex justify-center">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg max-auto">
                            <x-table class="flex justify-start">
                                <x-slot name="head">
                                    <x-th>First Name</x-th>
                                    <x-th>Last Name</x-th>
                                    <x-th>Email</x-th>
                                    <x-th>Phone</x-th>
                                    <x-th>Address</x-th>
                                    <x-th>City</x-th>
                                    <x-th>Zip / Postal Code</x-th>
                                    <x-th>Created At</x-th>
                                    <x-th></x-th>
                                </x-slot>
                                <x-slot name="body">
                                    @foreach ($users as $user)
                                        <x-tr>
                                            <x-td>{{ $user->first_name}}</x-td>
                                            <x-td>{{ $user->last_name }}</x-table.cell>
                                            <x-td>{{ $user->email}}</x-td>
                                            <x-td>{{ $user->phone}}</x-td>
                                            <x-td>{{ $user->address }}</x-td>
                                            <x-td>{{ $user->city }}</x-td>
                                            <x-td>{{ $user->zip_code}}</x-td>
                                            <x-td>{{ $user->created_at->format('d/m/Y h:ia') }}</x-td>

                                            {{-- <x-td class="flex items-center justify-start">
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
                                            </x-td> --}}
                                        </x-tr>
                                    @endforeach
                                </x-slot>
                            </x-table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
