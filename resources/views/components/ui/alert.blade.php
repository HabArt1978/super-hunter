@props(['type' => 'success'])

@php
$classes = Arr::toCssClasses([
    'flex items-center mt-8 p-4 rounded-2xl',
    'bg-red-900' => $type === 'error',
    'bg-teal-900' => $type === 'success'
])
@endphp

<div @class($classes)>
    {{$alertIcon}}

    {{$alertMessage}}
</div>
