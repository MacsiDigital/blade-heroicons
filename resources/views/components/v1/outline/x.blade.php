@props(['strokeWidth' => 2, 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor'])
<x-heroicons::svg {{ $attributes }} :viewBox="$viewBox" :fill="$fill" :stroke="$stroke" :stroke-width="$strokeWidth" x-description="Heroicon name: outline/x">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
</x-heroicons::svg>
