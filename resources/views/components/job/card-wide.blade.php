<article
         class="flex max-w-full bg-slate-900 p-4 rounded-2xl border-2 border-transparent hover:border-blue-600 transition duration-300 group">

    <div class='rounded-lg'>
        {{ $company_logo }}
    </div>

    <div class='flex flex-col w-full ml-8'>
        <header class='flex justify-between'>
            <h3 class="text-orange-400">{{ $card_header }}</h3>

            <div class='flex gap-4 text-sm'>
                <div>последнее обновление</div>
                <div>22:15</div>
            </div>
        </header>

        <section class='flex flex-1 items-center'>
            <p class=' text-2xl group-hover:text-blue-600 transition duration-300'>
                {{ $card_title }}
            </p>
        </section>

        <footer class='flex justify-between items-end'>
            <div class='flex-1'>
                <p>{{ $card_description }}</p>
            </div>

            <ul class='flex gap-4'>
                {{ $tag_listings }}
            </ul>
        </footer>
    </div>
</article>
