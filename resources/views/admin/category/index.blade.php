<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8 flex justify-center">
             <div {{--class="bg-white overflow-hidden shadow-xl sm:rounded-lg"--}}>

                <div class="flex justify-end mr-0 mt-8 mb-5">
                    <a href="{{ route('admin.category.create') }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-2">Create New Category
                        </a>
                </div>

                <div class="mx-auto sm:px-6 lg:px-0 flex justify-center">

                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg max-w-8xl">
                        <x-table class="table-auto">
                            <x-slot name="head">
                                <x-th sortable>Category</x-th>
                                <x-th sortable>Description</x-th>
                                <x-th sortable>Actions</x-th>
                            </x-slot>
                            <x-slot name="body">
                                @foreach ($categories as $category)
                                    <x-tr>
                                        <x-td>{{ $category->name }}</x-td>
                                        <x-td>{{ $category->description }}</x-td>
                                        <x-td class="justify-center">
                                            <a href="{{ route('admin.category.edit', $category->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                            @if ($category->events()->exists())
                                            <button disabled class="text-indigo-600 hover:text-indigo-900 cursor-not-allowed">Delete</button>
                                            {{-- <p class="text-red-500">This category is referenced in events and cannot be deleted.</p> --}}
                                            @else
                                            <form class="inline-block" action="{{ route('admin.category.destroy', $category) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-indigo-600 hover:text-indigo-900">Delete</button>
                                            </form>
                                            @endif
                                        </x-td>
                                    </x-tr>
                                @endforeach
                            </x-slot>
                        </x-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
