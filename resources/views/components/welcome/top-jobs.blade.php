@props(['jobs'])

<x-section-container>

    <x-slot:section_header>Лучшие вакансии</x-slot:section_header>

    <x-slot:section_content>
        <div class="grid grid-cols-3 gap-4 mt-2">
            @foreach($jobs as $job)
                <x-ui.job-card>

                    <x-slot:card_header>{{$job->employer->name}}</x-slot:card_header>
                    <x-slot:card_title>{{$job->title}}</x-slot:card_title>
                    <x-slot:card_description>{{$job->schedule}} — {{$job->salary}}</x-slot:card_description>

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
                        @php
                            $seed = mt_rand(1, 10000);
                        @endphp

                        <img src='https://picsum.photos/seed/{{ $seed }}/90/90'
                             alt="Логотип компании"
                             width="90"
                             height="90"
                             class="rounded-lg" />
                    </x-slot:company_logo>

                </x-ui.job-card>
            @endforeach
        </div>

        <div class="w-50 mx-auto mt-4">
            {{$jobs->links()}}
        </div>
    </x-slot:section_content>

</x-section-container>
