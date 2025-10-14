<x-layout>
    <x-section-container type="page">

        <x-slot:section_header>Создание вакансии</x-slot:section_header>

        <x-slot:section_content>

            <x-forms.card>
                <x-slot:formTitle>
                    Создать новую вакансию
                </x-slot:formTitle>

                <x-slot:formDescription>
                    Нам просто нужно немного подробностей от вас.
                </x-slot:formDescription>

                <form action='/jobs' method="POST" class="mt-6 w-3/4 mx-auto">
                    @csrf

                    <x-forms.container>
                        <x-forms.field>
                            <label for="title">Название вакансии</label>
                            <input id="title" name="title" type="text" placeholder="Гладиатор" required class="border-1 border-blue-600 h-10 px-4 rounded-lg mt-1 bg-blue-900/20">
                        </x-forms.field>


                        <div class="flex flex-col">
                            <label for="salary">Заработная плата</label>
                            <input id="salary" name="salary" type="text" placeholder="50 000 ₽" required class="border-1 border-gray-300 h-10 px-4 rounded-lg mt-1">
                        </div>

                        <div class="flex flex-col">
                            <label for="schedule">График работы</label>
                            <input id="schedule" name="schedule" type="text" placeholder="5/2, смена 8 часов" required class="border-1 border-gray-300 h-10 px-4 rounded-lg mt-1">
                        </div>

                        <div class="flex flex-col">
                            <label for="location">Место работы</label>
                            <input id="location" name="location" type="text" placeholder="г.Саранск ул.Рабочая д.37" required class="border-1 border-gray-300 h-10 px-4 rounded-lg mt-1">
                        </div>

                        <div class="flex flex-col">
                            <label for="url">Сайт компании</label>
                            <input id="url" name="url" type="text" placeholder="www.example.com" required class="border-1 border-gray-300 h-10 px-4 rounded-lg mt-1">
                        </div>
                    </x-forms.container>

                    <div class="border-t-2 mt-10">
                        <button type="submit" class="mt-10 border-1 p-2">разместить</button>
                    </div>

                </form>
            </x-forms.card>




        </x-slot:section_content>

    </x-section-container>
</x-layout>
