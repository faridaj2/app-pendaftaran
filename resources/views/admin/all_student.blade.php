<x-AdminLayout>
    <x-slot name="title">
    </x-slot>
    <x-slot name="body">
        <div class="w-full">
            <div>
                <form action="{{ route('admin.all_student') }}" method="get">
                    @csrf
                    <div class="flex items-center md:ml-auto md:pr-4">
                        <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
        
                            <input type="text" name="search"
                                class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Type here...">
                        </div>
                    </div>
                </form>

            </div>
            
        </div>
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
                        Status</th>
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
                            <p class="mb-0 font-semibold leading-tight text-xs">
                                @if ($item->status == 'wait')
                                    <span
                                        class="bg-gradient-to-tl from-slate-600 to-slate-300 px-3.6 text-xs rounded-1.8 py-2.2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white p-3">Belum
                                        Terdaftar</span>
                                @else
                                    <span
                                        class="bg-gradient-to-tl from-green-600 to-lime-400 px-3.6 text-xs rounded-1.8 py-2.2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white p-3">Sudah
                                        Terdaftar</span>
                                @endif
                            </p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <form action="{{ route('toggle_status') }}" method="post" class="p-0 m-0 inline-block">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button
                                    class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"
                                    href="javascript:;"></i>
                                    @if ($item->status == 'wait')
                                        Konfirmasi Daftar Ulang
                                    @else
                                        Batalkan Daftar Ulang
                                    @endif
                                </button>
                            </form>
                        </td>


                    </tr>
                @endforeach


            </tbody>
        </table>
    </x-slot>
</x-AdminLayout>
