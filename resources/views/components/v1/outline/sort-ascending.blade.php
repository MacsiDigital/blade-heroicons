@props(['strokeWidth' => 2, 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor'])
<x-heroicons::svg {{ $attributes }} :viewBox="$viewBox" :fill="$fill" :stroke="$stroke" :stroke-width="$strokeWidth" x-description="Heroicon name: outline/sort-ascending">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12"></path>
</x-heroicons::svg>
