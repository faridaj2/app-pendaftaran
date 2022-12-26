<x-UserLayout>
    <x-slot name="title">
        Edit Data
    </x-slot>
    <x-slot name="body">
        <div class="flex flex-col w-full max-w-full px-3 md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
            <div
                class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                <div class="pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                    <h3
                        class="relative z-10 font-bold text-transparent bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text">
                        Halo</h3>
                    <p class="mb-0">Ini adalah detail data anda, Silahkan di edit</p>
                </div>
                <div class="flex-auto p-6 ">
                    <form role="form" action="{{ route('update_siswa') }}" method="POST">
                        @csrf
                        @method('put')
                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Nama</label>
                        <div class="mb-4">
                            <input type="text" name="nama"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Masukkan Nama" aria-label="Email" aria-describedby="email-addon" value="{{ $siswa->nama }}">
                        </div>
                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">KK</label>
                        <div class="mb-4">
                            <input type="number"  name="kk"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Masukkan Nomer KK" aria-label="Password" aria-describedby="password-addon" value="{{ $siswa->kk }}">
                        </div>
                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">NIK</label>
                        <div class="mb-4">
                            <input type="number"  name="nik"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Masukkan Nomer NIK" aria-label="Password"
                                aria-describedby="password-addon" value="{{ $siswa->nik }}">
                        </div>
                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">NISN</label>
                        <div class="mb-4">
                            <input type="number"  name="nisn"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Masukkan Nomer NISN" aria-label="Password"
                                aria-describedby="password-addon" value="{{ $siswa->nisn }}">
                        </div>
                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Jenis Kelamin</label>
                        <div class="mb-4">
                            <select  name="kelamin"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                id="">
                                @if ($siswa->kelamin == 'L')
                                <option value="L" selected>Laki-Laki</option>
                                <option value="P">Perempuan</option>
                                @else
                                <option value="P" selected>Perempuan</option>
                                <option value="L">Laki Laki</option>
                                @endif


                            </select>
                        </div>
                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Tempat Lahir</label>
                        <div class="mb-4">
                            <input type="text"  name="pob"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Masukkan Tempat Lahir" aria-label="Password"
                                aria-describedby="password-addon" value="{{ $siswa->pob }}">
                        </div>
                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Tanggal Lahir</label>
                        <div class="mb-4">
                            <input type="date"  name="dob"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Masukkan Tanggal Lahir" aria-label="Password"
                                aria-describedby="password-addon" value="{{ $siswa->dob }}">
                        </div>
                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Alamat</label>
                        <div class="mb-4">
                            <input type="text"  name="alamat"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Masukkan Alamat" aria-label="Password" aria-describedby="password-addon" value="{{ $siswa->alamat }}">
                        </div>
                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Ayah</label>
                        <div class="mb-4">
                            <input type="text"  name="ayah"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Masukkan nama Ayah" aria-label="Password"
                                aria-describedby="password-addon" value="{{ $siswa->ayah }}">
                        </div>
                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Ibu</label>
                        <div class="mb-4">
                            <input type="text"  name="ibu"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Masukkan nama Ibu" aria-label="Password" aria-describedby="password-addon" value="{{ $siswa->ayah }}">
                        </div>
                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">No. Hp Ayah</label>
                        <div class="mb-4">
                            <input type="number"  name="hp_ayah"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Masukkan Nomer HP Ayah" aria-label="Password"
                                aria-describedby="password-addon" value="{{ $siswa->hp_ayah }}">
                        </div>
                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">No. Hp Ibu</label>
                        <div class="mb-4">
                            <input type="number"  name="hp_ibu"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Masukkan Nomer HP Ibu" aria-label="Password"
                                aria-describedby="password-addon" value="{{ $siswa->hp_ibu }}">
                        </div>
                        <input type="text" name="id" value="{{ $siswa->id }}" hidden id="">
                        <div class="text-center">
                            <button type="submit" href=""
                                class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Simpan</button>
                        </div>


                    </form>

                </div>

            </div>
        </div>
    </x-slot>
</x-UserLayout>
