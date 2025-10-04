<x-welcome.section-container>
    <x-slot:section_header>Теги вакансий</x-slot:section_header>

    <x-slot:section_content>
        <ul class="flex flex-wrap gap-x-4 gap-y-6 justify-between w-fit">
            @for ($j = 0; $j < 55; $j++)
                <li>
                    <x-ui.link-button variant="outlined">
                        tag
                    </x-ui.link-button>
                </li>
            @endfor
            <div class='flex-1'></div>
        </ul>
    </x-slot:section_content>
</x-welcome.section-container>
