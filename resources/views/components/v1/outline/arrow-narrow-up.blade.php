@props(['strokeWidth' => 2, 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor'])
<x-heroicons::svg {{ $attributes }} :viewBox="$viewBox" :fill="$fill" :stroke="$stroke" :stroke-width="$strokeWidth" x-description="Heroicon name: outline/arrow-narrow-up">
    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7l4-4m0 0l4 4m-4-4v18" />
</x-heroicons::svg>
