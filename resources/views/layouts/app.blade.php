<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestion des réservations')</title>
    @vite('resources/css/app.css')
    @livewireStyles

</head>
<body class="bg-gray-100">

    <nav class="bg-primary text-white p-4">
        <div class="container mx-auto">
            <a href="{{ route('home') }}" class="text-xl font-bold">Réservations</a>
        </div>
    </nav>

    <div class="container mx-auto mt-6">
        @yield('content')
    </div>
    <x-button color="secondary">Réserver</x-button>
    @foreach ($properties as $property)
    <x-property-card :property="$property" />
    @endforeach
    @livewireScripts

    @livewire(\App\Livewire\BookingManager::class)

    <script src="{{ asset('livewire/livewire.js') }}"></script>

</body>
</html>
