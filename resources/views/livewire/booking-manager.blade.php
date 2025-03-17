<div class="p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">Gérer la Réservation</h2>

    @if (session()->has('message'))
        <div class="mb-4 p-3 bg-green-200 text-green-800 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="saveBooking">
        <div class="mb-4">
            <label for="start_date" class="block text-gray-700">Date de début</label>
            <input type="date" id="start_date" wire:model="start_date" 
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            @error('start_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="end_date" class="block text-gray-700">Date de fin</label>
            <input type="date" id="end_date" wire:model="end_date" 
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            @error('end_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">
            Réserver
        </button>
    </form>
  <div>  <button wire:click="saveBooking">Save Booking</button> </div>

</div>
