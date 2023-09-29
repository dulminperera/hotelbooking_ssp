<div class = "max-w-2xl mx-auto">
    <form class="bg-white p-6 rounded" wire:submit.prevent="createReservation">
        <div class="space-y-12">

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Customer Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Please provide your personal information to
                    complete the reservation</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4">

                            <!-- First Name -->
                            <div class="sm:col-span-2">
                                <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                                <div class="mt-2">
                                    <input type="text" wire:model="reservation.first_name" name="first_name" id="first_name" autocomplete="given-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @error('reservation.first_name')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Last Name -->
                            <div class="sm:col-span-2">
                                <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                                <div class="mt-2">
                                    <input type="text" wire:model="reservation.last_name" name="last_name" id="last_name" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @error('reservation.last_name')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Number of Tickets -->
                            <div class="sm:col-span-4">
                                <label for="number_of_ticket" class="block text-sm font-medium leading-6 text-gray-900"> Number of Rooms</label>
                                <div class="mt-2">
                                    <input type="number" wire:model="reservation.number_of_tickets" name="number_of_ticket" id="number_of_ticket" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @error('reservation.number_of_tickets')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="sm:col-span-2">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900"> Email</label>
                                <div class="mt-2">
                                    <input type="text" wire:model="reservation.email" name="email" id="email" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @error('reservation.email')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="sm:col-span-2">
                                <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900"> Phone Number</label>
                                <div class="mt-2">
                                    <input type="text" wire:model="reservation.phone_number" name="phone_number" id="phone_number" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @error('reservation.phone_number')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="sm:col-span-4">
                                <div class="flex items-start gap-x-4">
                                    <h2 class="text-base font-semibold leading-7 text-gray-900">Payment Information</h2>
                                </div>
                            </div>


                            <!-- Card Number -->
                            <div class="sm:col-span-4">
                                <label for="card_number" class="block text-sm font-medium leading-6 text-gray-900"> Card Number</label>
                                <div class="mt-2">
                                    <input type="text" wire:model="reservation.card_number" name="card_number" id="card_number" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @error('reservation.card_number')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Expiration Date -->
                            <div class="sm:col-span-2">
                                <label for="expiry_date" class="block text-sm font-medium leading-6 text-gray-900">Expiration Date</label>
                                <div class="mt-2">
                                    <input type="text" wire:model="reservation.expiry_date" name="expiry_date" id="expiry_date" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @error('reservation.expiry_date')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- CVV -->
                            <div class="sm:col-span-2">
                                <label for="cvv" class="block text-sm font-medium leading-6 text-gray-900">CVC</label>
                                <div class="mt-2">
                                    <input type="text" wire:model="reservation.cvv" name="cvv" id="cvv" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @error('reservation.cvv')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="javascript:history.back()"
                            class="text-sm font-semibold leading-6 text-gray-900 pr-2 block">Cancel</button>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 ml-4 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Reserve</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

