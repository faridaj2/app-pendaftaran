<x-UserLayout>
    <x-slot name="title">
        Halaman User
    </x-slot>
    <x-slot name="body">
        <div class="flex flex-warp -mx-3 mb-2">
            <div class="w-full max-w-full px-3 mb-6 sm:flex-none xl:mb-0">
                <div class=" bg-white shadow-soft-xl rounded-2xl bg-clip-border w-full">
                    <div class="w-full p-4">
                        <div class="flex flex-row justify-between -mx-3">
                            <div class="flex-none max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Data yang Tersimpan
                                    </p>

                                </div>
                            </div>
                            <div class="px-3 text-right ">
                                <a href="{{ route('add-page') }}"
                                    class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                    <i class="fa fa-plus text-lg relative top-3 text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6>Data yang tersimpan</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto ps">
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
                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
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
                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <p class="mb-0 font-semibold leading-tight text-xs">{{ $item->ayah }}
                                                </p>
                                            </td>
                                            <td
                                                class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                                <p class="mb-0 font-semibold leading-tight text-xs">{{ $item->ibu }}
                                                </p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <form action="{{ route('edit_siswa') }}" method="post"
                                                    class="p-0 m-0 inline-block">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <button type="submit" href=""
                                                        class="font-semibold leading-tight text-xs text-slate-400">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </td>

                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <span class="flex flex-col">

                                                    <form action="{{ route('hapus_siswa') }}" method="post"
                                                        class="p-0 m-0">
                                                        @csrf
                                                        <input type="hidden" name="id"
                                                            value="{{ $item->id }}">
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
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-UserLayout>
