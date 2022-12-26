<x-AdminLayout>
    <x-slot name="title">
    </x-slot>
    <x-slot name="body">
        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
            <thead class="align-bottom">
                <tr>
                    <th
                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Nama</th>
                    <th
                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Ayah</th>
                    <th
                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Ibu</th>
                    <th
                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    </th>
                    <th
                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <div class="flex px-2 py-1">
                                <div>
                                    <img src="https://static.wikia.nocookie.net/mobile-legends/images/9/95/Hero601-portrait.png/revision/latest?cb=20221217032835"
                                        class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                        alt="user1">
                                </div>
                                <div class="flex flex-col justify-center">
                                    <a href="/detail/{{ $item->id }}"
                                        class="mb-0 leading-normal text-sm">{{ $item->nama }}</a>
                                    <p class="mb-0 leading-tight text-xs text-slate-400">
                                        {{ $item->alamat }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-xs">{{ $item->ayah }}
                            </p>
                        </td>
                        <td
                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-xs">{{ $item->ibu }}
                            </p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <form action="{{ route('edit_siswa') }}" method="post" class="p-0 m-0 inline-block">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="submit" href=""
                                    class="font-semibold leading-tight text-xs text-slate-400">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </form>
                        </td>

                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <span class="flex flex-col">

                                <form action="{{ route('hapus_siswa') }}" method="post" class="p-0 m-0">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" href=""
                                        class="font-semibold leading-tight text-xs text-red-400">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>

                            </span>

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </x-slot>
</x-AdminLayout>
