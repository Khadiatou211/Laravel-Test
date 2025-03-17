@props(['property'])

<div class="bg-white p-4 rounded-lg shadow-md">
    <h2 class="text-xl font-bold">{{ $property->name }}</h2>
    <p class="text-gray-600">{{ $property->description }}</p>
    <p class="text-primary font-semibold">{{ $property->price_per_night }}€ / nuit</p>
    <x-button color="secondary">Réserver</x-button>
</div>
