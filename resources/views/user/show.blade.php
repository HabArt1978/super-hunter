<x-layout>
    <x-section-container type="page">

        <x-slot:section_header>
            <div class='grid gap-4 w-fit mx-auto'>
                <span>Профиль пользователя</span>
                <div class='grid text-2xl border-t-1 border-orange-500 pt-2'>
                    <span>{{$user['name']}}</span>
                    <span>{{$user['email']}}</span>
                </div>
            </div>
        </x-slot:section_header>

        <x-slot:section_content>

            <x-ui.forms.card>
                <x-slot:formTitle>
                    Добавить компанию работодателя
                </x-slot:formTitle>

                <x-slot:formDescription>
                    Пока возможно создать только одну компанию для одного пользователя.
                </x-slot:formDescription>

                <x-ui.forms.form
                    method="POST"
                    action="/users/{{Auth::user()->id}}/employer">
                    @csrf
                    @method('PUT')
                    
                    <x-ui.forms.container>
                        <x-ui.forms.field>
                            <x-ui.forms.label
                                for="employer_name"
                                @class(['text-red-500' => $errors->has('employer_name')])
                            >
                                Название компании
                            </x-ui.forms.label>

                            <x-ui.forms.input
                                id="employer_name"
                                name="employer_name"
                                type="text"
                                value="{{old('employer_name')}}"
                                placeholder="Гладиатор"
                                required
                                @class(['border-red-500' => $errors->has('employer_name')]) />

                            @error('employer_name')
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
