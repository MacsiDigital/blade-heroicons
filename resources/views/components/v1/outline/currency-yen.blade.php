@props(['strokeWidth' => 2, 'viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor'])
<x-heroicons::svg {{ $attributes }} :viewBox="$viewBox" :fill="$fill" :stroke="$stroke" :stroke-width="$strokeWidth" x-description="Heroicon name: outline/currency-yen">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8l3 5m0 0l3-5m-3 5v4m-3-5h6m-6 3h6m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
</x-heroicons::svg>
