<article
    class="flex flex-col max-w-full bg-slate-900 p-4 rounded-2xl border-2 border-transparent hover:border-blue-600 transition duration-300 group">

    <header class='text-left text-orange-400'>
        <h3>{{ $card_header }}</h3>
    </header>

    <section class='flex-1 my-6 space-y-6 text-center'>
        <p class='text-2xl group-hover:text-blue-600 transition duration-300'>{{ $card_title }}</p>
        <p>{{ $card_description }}</p>
    </section>

    <footer class='flex justify-between items-end gap-2'>
        <ul class='flex flex-wrap flex-1 gap-2'>
            {{ $tag_listings }}
        </ul>

        <div class='rounded-lg'>
            {{ $company_logo }}
        </div>
    </footer>
</article>


