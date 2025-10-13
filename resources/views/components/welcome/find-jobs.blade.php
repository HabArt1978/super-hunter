<x-section-container>

    <x-slot:section_header>Поиск вакансии</x-slot:section_header>

    <x-slot:section_content>
        <ul class="grid gap-4 mt-2">
            @for ($i = 0; $i < 3; $i++)
                <x-ui.job-card-wide>

                    <x-slot:card_header>Название компании</x-slot:card_header>
                    <x-slot:card_title>Разработчик Laravel</x-slot:card_title>
                    <x-slot:card_description>Полный рабочий день — 150 000₽</x-slot:card_description>

                    <x-slot:tag_listings>
                        @for ($j = 0; $j < 3; $j++)
                            <li>
                                <x-ui.link-button variant="outlined" size='small'>
                                    Tag
                                </x-ui.link-button>
                            </li>
                        @endfor
                    </x-slot:tag_listings>

                    <x-slot:company_logo>
                        <?php $seed = mt_rand(1, 10000); ?>
                        <img src='https://picsum.photos/seed/{{ $seed }}/130/130'
                             alt="Логотип компании"
                             width="130"
                             height="130"
                             class="rounded-lg" />
                    </x-slot:company_logo>

                </x-ui.job-card-wide>
            @endfor
        </ul>
    </x-slot:section_content>

</x-section-container>
