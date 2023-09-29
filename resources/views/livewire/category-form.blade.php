<div>
    <form wire:submit.prevent="submit" class="p-5">
        <div class="grid grid-cols-6 gap-4">

            <div class="col-span-2 sm:col-span-6">
                <x-label for="category_name" :value="__('Category Name')" />
                <x-input id="name" type="text" class="block mt-1 w-full" wire:model="category.name"/>
                <x-input-error for= "name" class="mt-2"/>
            </div>

            <div class="col-span-2 sm:col-span-6">
                <x-label for="description" :value="__(' Category Description')" />
                <x-textarea id="description" type="text" class="block mt-1 w-full" wire:model="category.description"/>
                <x-input-error for= "description" class="mt-2"/>

            <div class="col-span-2 sm:col-span-6 flex justify-end">
                <x-button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mt-4 rounded">
                    {{ __('Save') }}
                </x-button>
            </div>
        </div>
    </form>
</div>
