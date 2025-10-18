@props(['optionGroups'])

<select {{ $attributes->class(['border-2 border-blue-800 h-40 rounded-lg mt-1 bg-blue-900/10 custom-scrollbar']) }}>
    <option
        value=""
        selected
        disabled
        class='disabled:bg-blue-900/30 focus-visible:bg-blue-900/30 text-gray-300 px-6 py-2 '
    >
        Выберите категорию вакансии
    </option>

    <div class='px-6'>
        @foreach($optionGroups as $group)
            <optgroup
                label="{{ $group['name'] }}"
                class='text-sm py-2'>
                @foreach($group['options'] as $option)
                    <option
                        value="{{ $option['value'] }}"
                        class='py-1'>
                        {{ $option['name'] }}
                    </option>
                @endforeach
            </optgroup>
        @endforeach
    </div>
</select>


