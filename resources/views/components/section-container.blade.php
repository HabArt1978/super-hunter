@props(['type' => 'section'])

<section class='tracking-wider'>
    <div @class([
       'py-10' => $type === 'page',
    ])>
        @if($type === 'page')
            <div class="text-center">
                <h1 class='text-4xl'>{{ $section_header }}</h1>
            </div>
        @endif

        @if($type === 'section')
            <div class="flex items-center gap-2">
                <div class="size-3 bg-white"></div>
                <h2 class='text-lg'>{{ $section_header }}</h2>
            </div>
        @endif

        {{ $section_content }}
    </div>
</section>
