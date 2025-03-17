@props(['type' => 'button', 'color' => 'primary'])

<button type="{{ $type }}" class="px-4 py-2 rounded bg-{{ $color }} text-white hover:bg-{{ $color }}-dark">
    {{ $slot }}
</button>
