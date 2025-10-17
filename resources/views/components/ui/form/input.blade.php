<form
    method='GET'
    action="#"
    class='flex mx-auto mb-10'>
    @csrf

    <input
        {{ $attributes }}
        type="text"
        name="search-job"
        placeholder="Найти вакансию ..."
        class="block h-11 w-xl text-lg rounded-s-2xl bg-white/15 px-4 py-1.5 text-white outline-2 -outline-offset-1 outline-white/30 placeholder:text-gray-50 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-500" />
    <button
        type="submit"
        class="block rounded-e-2xl bg-white/15 px-3 py-1.5 my-[1px] ml-1 uppercase text-white outline-2 outline-white/30 hover:outline-orange-600 hover:bg-orange-600/10 tracking-widest transition duration-300">
        найти
    </button>

</form>
