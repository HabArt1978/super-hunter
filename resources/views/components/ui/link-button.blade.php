@props(['variant' => 'contained', 'color' => 'blue', 'size' => 'medium'])

@php
    $classes = Arr::toCssClasses([
        'uppercase rounded-lg transition-color duration-300 hover:cursor-pointer',
        'py-2 px-3' => $size === 'medium',
        'py-1 px-2 text-sm' => $size === 'small',

        'bg-blue-900 hover:bg-blue-900/50' => $variant === 'contained' && $color === 'blue',
        'bg-green-900 hover:bg-green-900/50' => $variant === 'contained' && $color === 'green',
        'bg-red-900 hover:bg-red-900/50' => $variant === 'contained' && $color === 'red',
        'bg-orange-700 hover:bg-orange-700/70' => $variant === 'contained' && $color === 'orange',

        'hover:bg-blue-900/50 outline-blue-600 outline-1' =>
            $variant === 'outlined' && $color === 'blue',
        'hover:bg-green-900/20 outline-green-600 outline-1' =>
            $variant === 'outlined' && $color === 'green',
        'hover:bg-red-900/20 outline-red-600 outline-1' =>
            $variant === 'outlined' && $color === 'red',
        'hover:bg-orange-700/20 outline-orange-500 outline-1' =>
            $variant === 'outlined' && $color === 'orange',
    ]);
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}'>
    {{ $slot }}
</a>
