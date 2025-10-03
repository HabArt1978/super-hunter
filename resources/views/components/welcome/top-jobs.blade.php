<x-welcome.section-container>

    <x-slot:section_header>Лучшие вакансии</x-slot:section_header>

    <x-slot:section_content>
        <div class="grid grid-cols-3 gap-4">
            @for ($i = 0; $i < 3; $i++)
                <x-ui.job-card>

                    <x-slot:card_header>Название компании</x-slot:card_header>
                    <x-slot:card_title>Разработчик Laravel</x-slot:card_title>
                    <x-slot:card_description>Полный рабочий день — 150 000₽</x-slot:card_description>

                    <x-slot:tag_listings>
                        <li><x-ui.link-button variant="outlined">Tag</x-ui.link-button></li>
                        <li><x-ui.link-button variant="outlined">Tag</x-ui.link-button></li>
                        <li><x-ui.link-button variant="outlined">Tag</x-ui.link-button></li>
                    </x-slot:tag_listings>

                    <x-slot:company_logo>
                        <?php $seed = mt_rand(1, 10000); ?>
                        <img src='https://picsum.photos/seed/{{ $seed }}/90/90'
                             alt="Логотип компании"
                             width="90"
                             height="90"
                             class="rounded-lg" />
                    </x-slot:company_logo>

                </x-ui.job-card>
            @endfor
        </div>
    </x-slot:section_content>

</x-welcome.section-container>
