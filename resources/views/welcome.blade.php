<x-layout>
    <div class='space-y-12 py-12'>
        <x-welcome.header />

        <x-welcome.top-jobs :jobs="$jobs"/>

        <x-welcome.tags />

        <x-welcome.find-jobs />
    </div>
</x-layout>
