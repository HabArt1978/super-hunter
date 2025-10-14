<x-layout>
    <x-section-container type="page">

        <x-slot:section_header>Вакансия -  {{$job->title}}</x-slot:section_header>

        <x-slot:section_content>
            <div class="mt-10">

                <x-job.card-show>

                    <x-slot:card_header>{{$job->employer->name}}</x-slot:card_header>
                    <x-slot:card_title>{{$job->title}}</x-slot:card_title>
                    <x-slot:card_description>{{$job->schedule}} — {{$job->salary}}</x-slot:card_description>

                    <x-slot:company_logo>
                        <img src="{{$job->employer->logo}}"
                             alt="Логотип компании"
                             width="90"
                             height="90"
                             class="rounded-lg" />
                    </x-slot:company_logo>

                    <x-slot:tag_listings>
                       @foreach($job->tags as $tag)
                            <li>
                                <x-ui.link-button variant="outlined" size='medium'>
                                    {{$tag->name}}
                                </x-ui.link-button>
                            </li>
                       @endforeach
                    </x-slot:tag_listings>

                </x-job.card-show>
            </div>
        </x-slot:section_content>

    </x-section-container>
</x-layout>
