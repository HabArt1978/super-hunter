<x-welcome.section-container>
    <x-slot:section_header>Теги вакансий</x-slot:section_header>

    <x-slot:section_content>

        <div class="flex flex-wrap gap-4 justify-center">
            @for ($i = 0; $i < 50; $i++)
                <x-ui.link-button variant="outlined">TAG</x-ui.link-button>
            @endfor
        </div>
    </x-slot:section_content>
</x-welcome.section-container>
