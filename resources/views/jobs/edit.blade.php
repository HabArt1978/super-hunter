<x-layout>
    <x-section-container type="page">

        <x-slot:section_header>Обновление вакансии</x-slot:section_header>

        <x-slot:section_content>

            <x-ui.forms.card>
                <x-slot:formTitle>
                    Обновить данные вакансии
                </x-slot:formTitle>

                <x-slot:formDescription>
                    Измените данные в вашей вакансии.
                </x-slot:formDescription>

                <x-ui.forms.form
                    method="POST"
                    action="/jobs">
                    @csrf

                    <x-ui.forms.container>
                        <x-ui.forms.field>
                            <x-ui.forms.label
                                for="job_title"
                                @class(['text-red-500' => $errors->has('job_title')])
                            >
                                Название вакансии
                            </x-ui.forms.label>

                            <x-ui.forms.input
                                id="job_title"
                                name="job_title"
                                type="text"
                                value="{{old('job_title')}}"
                                placeholder="Гладиатор"
                                required
                                @class(['border-red-500' => $errors->has('job_title')]) />

                            @error('job_title')
                            <x-ui.forms.error>{{$message}}</x-ui.forms.error>
                            @enderror

                        </x-ui.forms.field>

                        <x-ui.forms.field>
                            <x-ui.forms.label
                                for="salary"
                                @class(['text-red-500' => $errors->has('salary')])
                            >
                                Заработная плата
                            </x-ui.forms.label>

                            <x-ui.forms.input
                                id="salary"
                                name="salary"
                                type="text"
                                value="{{old('salary')}}"
                                placeholder="50 000 ₽"
                                required
                                @class(['border-red-500' => $errors->has('salary')])
                            />

                            @error('salary')
                            <x-ui.forms.error>{{$message}}</x-ui.forms.error>
                            @enderror
                        </x-ui.forms.field>

                        <x-ui.forms.field>
                            <x-ui.forms.label
                                for="schedule"
                                @class(['text-red-500' => $errors->has('schedule')])
                            >График работы
                            </x-ui.forms.label>
                            <x-ui.forms.input
                                id="schedule"
                                name="schedule"
                                type="text"
                                value="{{old('schedule')}}"
                                placeholder="5/2, смена 8 часов"
                                required
                                @class(['border-red-500' => $errors->has('schedule')])
                            />

                            @error('schedule')
                            <x-ui.forms.error>{{$message}}</x-ui.forms.error>
                            @enderror
                        </x-ui.forms.field>

                        <x-ui.forms.field>
                            <x-ui.forms.label
                                for="location"
                                @class(['text-red-500' => $errors->has('location')])
                            >Место работы
                            </x-ui.forms.label>
                            <x-ui.forms.input
                                id="location"
                                name="location"
                                type="text"
                                value="{{old('location')}}"
                                placeholder="г.Саранск ул.Рабочая д.37"
                                required
                                @class(['border-red-500' => $errors->has('location')])
                            />

                            @error('location')
                            <x-ui.forms.error>{{$message}}</x-ui.forms.error>
                            @enderror
                        </x-ui.forms.field>

                        <x-ui.forms.field>
                            <x-ui.forms.label
                                for="url"
                                @class(['text-red-500' => $errors->has('url')])
                            >Сайт компании
                            </x-ui.forms.label>
                            <x-ui.forms.input
                                id="url"
                                name="url"
                                type="url"
                                value="{{old('url')}}"
                                placeholder="https://www.example.com"
                                required
                                @class(['border-red-500' => $errors->has('url')])
                            />

                            @error('url')
                            <x-ui.forms.error>{{$message}}</x-ui.forms.error>
                            @enderror
                        </x-ui.forms.field>

                        <x-ui.forms.field>
                            <x-ui.forms.label for="tags">
                                Категории вакансии
                            </x-ui.forms.label>

                            @php
                                $categoriesSelectItemGroups = $categories->map(fn($c) => [
                                    'name' => $c->name,
                                    'options' => $c->tags->map(fn($t) => ['value' => $t->id, 'name' => $t->name])
                                ])
                            @endphp
                            <x-ui.forms.select
                                id="tags"
                                name='tags[]'
                                multiple
                                :option-groups='$categoriesSelectItemGroups' />

                            @error('tags')
                            <x-ui.forms.error>{{$message}}</x-ui.forms.error>
                            @enderror
                        </x-ui.forms.field>

                        <x-ui.forms.buttonContainer>
                            <x-ui.forms.button>Создать</x-ui.forms.button>

                            <x-ui.link-button
                                href="/"
                                color="red">отменить
                            </x-ui.link-button>
                        </x-ui.forms.buttonContainer>

                    </x-ui.forms.container>
                </x-ui.forms.form>

            </x-ui.forms.card>

        </x-slot:section_content>

    </x-section-container>
</x-layout>

