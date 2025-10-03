<header
        class='static flex justify-between px-6 items-center h-18 border-b-1 border-gray-dark shadow-xl'>
    <a href="#" class='absolute top-3 left-6'>
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

    <ul class="flex mx-auto gap-10">
        <li>
            <x-ui.link-button href='#'
                              color="orange"
                              variant="text">вакансии</x-ui.link-button>
        </li>
        <li>
            <x-ui.link-button href='#'
                              color="orange"
                              variant="text">карьера</x-ui.link-button>
        </li>
        <li>
            <x-ui.link-button href='#'
                              color="orange"
                              variant="text">зарплаты</x-ui.link-button>
        </li>
        <li>
            <x-ui.link-button href='#'
                              color="orange"
                              variant="text">компании</x-ui.link-button>
        </li>
    </ul>

    <div class='absolute top-5 right-8'>
        <x-ui.link-button type="link"
                          variant="contained"
                          color="blue">
            разместить вакансию
        </x-ui.link-button>
    </div>

</header>
