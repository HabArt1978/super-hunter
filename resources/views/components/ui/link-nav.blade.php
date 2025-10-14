@props(['active' => false, 'color' => 'orange'])

@php
    $classes = Arr::toCssClasses([
        'uppercase py-1.5 px-3 border-1 rounded-lg transition-color duration-300 hover:bg-gray-darker',
        'border-transparent' => !$active,

        'border-orange-400 text-orange-400 bg-gray-darker' => $active && $color === 'orange',
        'border-blue-500 text-blue-500 bg-gray-darker' => $active && $color === 'blue',
        'border-red-600 text-red-600 bg-gray-darker' => $active && $color === 'red',
        'border-green-700 text-green-600 bg-gray-darker' => $active && $color === 'green',
    ]);
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
