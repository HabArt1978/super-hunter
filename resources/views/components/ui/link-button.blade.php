@props(['isActive' => false, 'variant' => 'contained', 'type' => 'link', 'color' => 'blue'])

<?php
$boxVariantClasses = [
    'contained-blue' => 'bg-blue-600 text-white hover:bg-blue-600/60',
    'contained-green' => 'bg-green-500 text-white hover:bg-green-500/60',
    'contained-red' => 'bg-red-700 text-white hover:bg-red-700/60',
    'contained-orange' => 'bg-orange-500 text-white hover:bg-orange-500/60',

    'outlined-blue' => 'border-1 border-blue-600 hover:border-blue-600/80 hover:bg-gray-950',
    'outlined-green' => 'border-1 border-green-500 hover:border-green-600 hover:bg-gray-darker',
    'outlined-red' => 'border-1 border-red-500 hover:border-red-600 hover:bg-gray-darker',
    'outlined-orange' => 'border-1 border-orange-500 hover:border-orange-600 hover:bg-gray-darker',

    'text-blue' => 'border-1 border-transparent hover:border-blue-600',
    'text-green' => 'border-1 border-transparent hover:border-green-400',
    'text-red' => 'border-1 border-transparent hover:border-red-400',
    'text-orange' => 'border-1 border-transparent hover:border-orange-400',
];

$boxDefinedClasses = $boxVariantClasses["{$variant}-{$color}"];

$textClasses = match ($variant) {
    'text' => 'text-gray-light transition-color duration-300 group-hover:text-orange-400',
    default => '',
};
?>

<div
     class="rounded-md px-2 py-1 group uppercase transition-color duration-300 w-fit {{ $type === 'link' ? 'hover:cursor-pointer' : '' }} {{ $boxDefinedClasses }}">
    @if ($type === 'link')
        <a {{ $attributes }} class="text-gray-light {{ $textClasses }}">
            {{ $slot }}
        </a>
    @endif

    @if ($type === 'button')
        <button {{ $attributes->except('class') }} class="uppercase text-white {{ $textClasses }}">
            {{ $slot }}
        </button>
    @endif
</div>
