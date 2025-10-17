<x-section-container>

    <x-slot:section_header>Поиск вакансии</x-slot:section_header>

    <x-slot:section_content>
        <ul class="grid gap-4 mt-2">
            @foreach($jobs as $job)
                <x-job.card-wide>

                    <x-slot:card_header>{{$job->employer->name}}</x-slot:card_header>
                    <x-slot:card_title>{{$job->title}}</x-slot:card_title>
                    <x-slot:card_description>{{$job->schedule}} - {{$job->salary}}</x-slot:card_description>

                    <x-slot:tag_listings>
                        @foreach($job->tags as $tag)
                            <x-job.tag>
                                {{$tag->name}}
                            </x-job.tag>
                        @endforeach
                    </x-slot:tag_listings>

                    <x-slot:company_logo>
                        <img
                            src="{{$job->employer->logo}}"
                            alt="Логотип компании"
                            width="130"
                            height="130"
                            class="rounded-lg" />
                    </x-slot:company_logo>

                </x-job.card-wide>
            @endforeach
        </ul>
    </x-slot:section_content>

</x-section-container>
