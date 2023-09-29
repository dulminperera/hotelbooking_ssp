<div>
    <form wire:submit.prevent="submit" class="p-5">
        <div class="grid grid-cols-6 gap-4">

            <div class="col-span-2 sm:col-span-6">
                <x-label for="image" :value="__('Image')" />
                <x-input id="image" type="file" class="block mt-1 w-full" wire:model="image"/>
                <x-input-error for="image" class="mt-2"/>
            </div>

            <div class="col-span-3">
                <x-label for="category_id" value="{{ __('Category') }}" />
                <select id="category_id"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                    wire:model="event.category_id">
                    <option value="">Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-input-error for="category_id" class="mt-2" />
            </div>


            <div class="col-span-2 sm:col-span-3">
                    <x-label for="event_name" :value="__('Hotel Name')" />
                    <x-input id="event_name" type="text" class="block mt-1 w-full" wire:model="event.event_name"/>
                    <x-input-error for= "event.event_name" class="mt-2"/>
            </div>

            <div class="col-span-2 sm:col-span-6">
                <x-label for="description" :value="__('Description')" />
                <x-textarea id="description" type="text" class="block mt-1 w-full" wire:model="event.description"/>
                <x-input-error for= "name" class="mt-2"/>
        </div>

            <div class="col-span-2 sm:col-span-3">
                <x-label for="venue" :value="__('Venue')" />
                <x-input id="venue" type="text" class="block mt-1 w-full" wire:model="event.venue"/>
                <x-input-error for= "name" class="mt-2"/>
            </div>

            <div class="col-span-2 sm:col-span-3">
                <x-label for="address" :value="__('Address')" />
                <x-input id="address" type="text" class="block mt-1 w-full" wire:model="event.address"/>
                <x-input-error for= "name" class="mt-2"/>
            </div>

            <div class="col-span-2 sm:col-span-3">
                <x-label for="date" :value="__('Date')" />
                <x-input id="date" type="text" class="block mt-1 w-full" wire:model="event.date"/>
                <x-input-error for= "name" class="mt-2"/>
            </div>

            <div class="col-span-2 sm:col-span-3">
                <x-label for="time" :value="__('Time')" />
                <x-input id="time" type="text" class="block mt-1 w-full" wire:model="event.time"/>
                <x-input-error for= "name" class="mt-2"/>
            </div>

            <div class="col-span-2 sm:col-span-6">
                <x-label for="price_per_ticket" :value="__('Price Per Room')" />
                <x-input id="price_per_ticket" type="text" class="block mt-1 w-full" wire:model="event.price_per_ticket"/>
                <x-input-error for= "name" class="mt-2"/>
            </div>

            <div class="col-span-2 sm:col-span-6">
                <x-button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    {{ __('Save') }}
                </x-button>
            </div>
        </div>
    </form>
</div>
