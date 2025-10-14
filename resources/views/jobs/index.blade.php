<x-layout>

    <x-section-container type="page">

        <x-slot:section_header>Вакансии</x-slot:section_header>


        <x-slot:section_content>

            <div class="my-10">
                {{$jobs->links()}}
            </div>

            <div class="grid grid-cols-3 gap-4">
                @foreach($jobs as $job)
                    <x-ui.link-card link="/jobs/{{$job->id}}">
                        <x-job.card>
                            <x-slot:card_header>{{$job->employer->name}}</x-slot:card_header>
                            <x-slot:card_title>{{$job->title}}</x-slot:card_title>
                            <x-slot:card_description>{{$job->schedule}} — {{$job->salary}}</x-slot:card_description>

                            <x-slot:tag_listings>
                                @foreach($job->tags as $tag)
                                    <x-job.tag>
                                        {{$tag->name}}
                                    </x-job.tag>
                                @endforeach
                            </x-slot:tag_listings>

                            <x-slot:company_logo>
                                <img src="{{$job->employer->logo}}"
                                     alt="Логотип компании"
                                     width="90"
                                     height="90"
                                     class="rounded-lg" />
                            </x-slot:company_logo>
                        </x-job.card>
                    </x-ui.link-card>

                @endforeach
            </div>


        </x-slot:section_content>

    </x-section-container>
</x-layout>
