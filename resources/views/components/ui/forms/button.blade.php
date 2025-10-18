@props(['color' => 'blue'])

@php
    $buttonClasses = Arr::toCssClasses([
        'uppercase rounded-lg transition-color duration-300 py-2 px-3',
        'bg-blue-800 hover:bg-blue-800/60' => $color === 'blue',
        'bg-red-800 hover:bg-red-800/60' => $color === 'red'
        ])
@endphp

<button {{$attributes->merge(['class' => $buttonClasses])}}>
    {{$slot}}
</button>

