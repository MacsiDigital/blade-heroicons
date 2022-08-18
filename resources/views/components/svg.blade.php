@props(['strokeWidth' => 2])
<svg {{ $attributes }} fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke-width="{{ $strokeWidth }}">
    {{ $slot }}
</svg>
