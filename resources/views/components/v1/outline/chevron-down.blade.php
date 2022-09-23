@props(['strokeWidth' => 2, 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor'])
<x-heroicons::svg {{ $attributes }} viewBox="$viewBox" :fill="$fill" :stroke="$stroke" :stroke-width="$strokeWidth" x-description="Heroicon name: outline/chevron-up">
    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
</x-heroicons::svg>
