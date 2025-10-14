<article
    class="flex flex-col max-w-full text-center bg-slate-900 p-4 rounded-2xl">

    <header class='inline-flex gap-4 items-center'>
        <div class='rounded-lg'>
            {{ $company_logo }}
        </div>

        <h3 class='text-orange-400'>{{ $card_header }}</h3>
    </header>

    <section class='flex-1 mb-20 space-y-6'>
        <p class='text-4xl'>{{ $card_title }}</p>
        <p class='text-xl'>{{ $card_description }}</p>
    </section>

    <footer class='flex justify-between items-end'>
        <ul class='flex gap-4 pb-1 flex-wrap w-3/4'>
            {{ $tag_listings }}
        </ul>
    </footer>
</article>


