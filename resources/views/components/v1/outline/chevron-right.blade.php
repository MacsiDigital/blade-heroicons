@props(['strokeWidth' => 2, 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor'])
<x-heroicons::svg {{ $attributes }} :viewBox="$viewBox" :fill="$fill" :stroke="$stroke" :stroke-width="$strokeWidth" x-description="Heroicon name: outline/chevron-right">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
</x-heroicons::svg>
