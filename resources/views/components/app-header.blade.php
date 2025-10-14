<header class='static  flex justify-between px-6 items-center h-18 bg-gray-darker/50 shadow-xl'>
    <a href="/" class='absolute top-3 left-6'>
        <div class='flex'>
            <div class='grid grid-cols-2 size-12 p-2'>
                <div class='row-start-1 col-start-1 col-end-2 size-6 bg-orange-600'></div>
                <div class='row-start-2 col-start-2 col-end-3 size-6 bg-blue-700 -mt-4 -ml-2'>
                </div>
            </div>
            <div class='flex justify-center items-center'>
                <span class='text-5xl font-medium text-blue-600'>S</span>
                <div class='flex flex-col'>
                    <span class='text-blue-600'>uper</span>
                    <span class='-mt-1 text-orange-600'>Hunter</span>
                </div>
            </div>
        </div>
    </a>

    <ul class="flex mx-auto gap-10 items-center">
        <li>
            <x-ui.link-nav href='/' :active="request()->is('/')">домашняя</x-ui.link-nav>
        </li>
        <li>
            <x-ui.link-nav href='/jobs' :active="request()->is('jobs')">вакансии</x-ui.link-nav>
        </li>
        <li>
            <x-ui.link-nav href='/career' :active="request()->is('career')">карьера</x-ui.link-nav>
        </li>
        <li>
            <x-ui.link-nav href='/salaries' :active="request()->is('salaries')">зарплаты</x-ui.link-nav>

        </li>
        <li>
            <x-ui.link-nav href='/company' :active="request()->is('company')">компании</x-ui.link-nav>
        </li>
    </ul>

    <div class='absolute top-6 right-8'>
        <x-ui.link-button href='jobs/create'>
            разместить вакансию
        </x-ui.link-button>
    </div>

</header>
