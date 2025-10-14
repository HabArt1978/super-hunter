@php
    $classes = Arr::toCssClasses([
        'uppercase rounded-lg my-8 transition-color duration-300 py-2 px-3 bg-blue-800 hover:bg-blue-800/60'
    ])
@endphp

<button {{$attributes->merge(['class' => $classes])}}>
    {{$slot}}
</button>

