<x-layout>

    <x-section-container type="page">

        <x-slot:section_header>Вакансии</x-slot:section_header>

        <x-slot:section_content>
            @session('job-created')
            <x-ui.alert type="success">
                <x-slot:alertIcon>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="mr-2 size-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </x-slot:alertIcon>

                <x-slot:alertMessage>
                    Вакансия создана:
                    <a  class='pl-1 text-orange-400 hover:underline'
                        href='{{ route('job.show', $value['id']) }}'>
                        {{ $value['title'] }}
                    </a>
                </x-slot:alertMessage>
            </x-ui.alert>
            @endsession

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
                                <img
                                    src="{{$job->employer->logo}}"
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
