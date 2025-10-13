<x-layout>
    @props(['jobs'])

    <x-section-container type="page">

        <x-slot:section_header>Вакансии</x-slot:section_header>


        <x-slot:section_content>

            <div class="my-10">
                {{$jobs->links()}}
            </div>

            <div class="grid grid-cols-3 gap-4">
                @foreach($jobs as $job)
                    <x-ui.job-card>

                        <x-slot:card_header>{{$job->employer->name}}</x-slot:card_header>
                        <x-slot:card_title>{{$job->title}}</x-slot:card_title>
                        <x-slot:card_description>{{$job->schedule}} — {{$job->salary}}</x-slot:card_description>

                        <x-slot:tag_listings>
                            @foreach($job->tags as $tag)
                                <li>
                                    <x-ui.link-button variant="outlined" size='small'>
                                        {{$tag->name}}
                                    </x-ui.link-button>
                                </li>
                            @endforeach
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


        </x-slot:section_content>

    </x-section-container>
</x-layout>
