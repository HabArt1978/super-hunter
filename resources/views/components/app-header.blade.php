<header class='static  flex justify-between px-6 items-center h-18 bg-gray-darker/50 shadow-xl'>
    <div class='absolute flex items-center gap-6 top-3 left-6'>
        <a
            href="/"
            class='group'>
            <div class='flex'>
                <div class='grid grid-cols-2 size-12 p-2'>
                    <div class='row-start-1 col-start-1 col-end-2 size-6 bg-orange-600 group-hover:bg-orange-400'></div>
                    <div class='row-start-2 col-start-2 col-end-3 size-6 bg-blue-700 group-hover:bg-blue-500 -mt-4 -ml-2'>
                    </div>
                </div>
                <div class='flex justify-center items-center'>
                    <span class='text-5xl font-medium text-blue-600 group-hover:text-blue-500'>S</span>
                    <div class='flex flex-col'>
                        <span class='text-blue-600 group-hover:text-blue-500'>uper</span>
                        <span class='-mt-1 text-orange-600 group-hover:text-orange-400'>Hunter</span>
                    </div>
                </div>
            </div>
        </a>

        @auth
            @php
                $user = Auth::user();
            @endphp

            <a href='{{ route('user.show', $user) }}' class='flex items-center gap-2 text-orange-400 hover:text-orange-300'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>

                <div class='-space-y-2'>
                    <div>
                        <span>{{$user->first_name}}</span>
                        <span>{{$user->last_name}}</span>
                    </div>
                    <div>
                        <span>{{$user->email}}</span>
                    </div>
                </div>
            </a>
        @endauth
    </div>

    <ul class="flex mx-auto gap-10 items-center">
        <li>
            <x-ui.link-nav
                href='/'
                :active="request()->is('/')">домашняя
            </x-ui.link-nav>
        </li>
        <li>
            <x-ui.link-nav
                href='/jobs'
                :active="request()->is('jobs')">вакансии
            </x-ui.link-nav>
        </li>
        <li>
            <x-ui.link-nav
                href='/career'
                :active="request()->is('career')">карьера
            </x-ui.link-nav>
        </li>
        <li>
            <x-ui.link-nav
                href='/salaries'
                :active="request()->is('salaries')">зарплаты
            </x-ui.link-nav>

        </li>
        <li>
            <x-ui.link-nav
                href='/company'
                :active="request()->is('company')">компании
            </x-ui.link-nav>
        </li>
    </ul>

    <div class='absolute top-6 right-8'>
        <x-ui.link-button href='/jobs/create'>
            разместить вакансию
        </x-ui.link-button>
    </div>

</header>
