<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PP. Darussalam Blokagung 2 | </title>
    <link rel="stylesheet" href="https://darussalam2.com/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://darussalam2.com/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://darussalam2.com/dist/assets/owl.theme.default.min.css">
    <link rel="icon" type="image/x-icon" href="https://darussalam2.com/icon.ico">



    <link href="https://darussalam2.com/myFont.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">



    <script src="https://kit.fontawesome.com/c47b455aa9.js" crossorigin="anonymous"></script>

    <style>

    </style>
</head>

<body class="">
    <div class="navbar bg-base-100 bg-gradient p-5">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">
                <div class="text-left text-rose-50">
                    <div class="font-Lato text-xs md:text-lg">PP. Darussalam Blokagung 2</div>
                    <div class="font-Montserrat font-normal text-xs">Setail - Genteng Banyuwangi</div>
                    <div class="color-decor">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </a>
        </div>

        <div class="flex-none">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="">
                        <i class="fa-sharp fa-solid fa-bars text-white text-xl"></i>
                    </div>
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <div class="divider text-xs">Menu</div>
                    <li><a href="/" class="justify-between">Home</a></li>
                    <li><a href="#pendidikan">Pendidikan</a></li>
                    <li><a href="#visi">Visi & Misi</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="informasi">Informasi Pendaftaran</a></li>
                    <div class="divider text-xs">Lainnya</div>

                    @if (Auth::check())
                        <li><a
                                href="
                            @if (Auth::user()->role == 'user') /user
                            @elseif(Auth::user()->role == 'admin')
                            /admin
                            @else
                            /dashboard @endif
                            ">Dashboard</a>
                        </li>
                    @else
                        <li><a>Masuk</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    {{-- <div class="owl-carousel">
        <div><img class="w-full" src="https://darussalam2.com/assets/slider/1.png"></div>
        <div><img class="w-full" src="https://darussalam2.com/assets/slider/2.png"></div>
        <div><img class="w-full" src="https://darussalam2.com/assets/slider/3.png"></div>
    </div> --}}




    <div class="bg-gradient p-10 flex justify-center" id="informasi">
        <div class="text-left">
            <h1 class="text-white font-Lato text-2xl font-bold mb-4">Informasi & Pendaftaran Peserta Didik Baru</h1>

            <a href=""
                class="inline-flex gap-2 text-white bg-white/20 p-3 hover:bg-white/30 transition rounded-lg">
                <div class="text-5xl "><i class="fa-brands fa-whatsapp "></i></div>
                <div>
                    <div class="font-Montserrat font-semibold">081237469396</div>
                    <div class="font-Montserrat font-normal">Informasi Pendaftaran</div>
                </div>
            </a>


        </div>
    </div>



    <div class="pattern p-8" id="pendidikan">
        <h1 class="text-center bg-transparent font-Lato font-bold text-2xl">
            <span class="text-[#60A547]">Program</span>
            <span class="text-[#648459]">Pendidikan</span>
        </h1>

        <div class="border-b-2 my-6 mx-auto md:w-1/2 border-[#60A547] border-dashed"></div>

        <div class="flex justify-center w-full p-5">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-7 md:w-2/3 md:p-2">

                <div
                    class="col-span-4 md:col-span-10 lg:col-span-12 xl:col-span-4 bg-white shadow-lg rounded-[20px] p-2 text-[#60A547] p-10 hover:scale-105 transition">
                    <div class="flex flex-col justify-center">
                        <div class="font-Lato font-bold text-2xl basis-1/12 text-center">
                            SMK DARUSSALAM BLOKAGUNG 2
                        </div>
                        <div class="border-b-2 w-3/4 my-4 border-[#60A547] mx-auto">

                        </div>
                    </div>
                    <div class="text-center font-Montserrat p-2">
                        Menjadi Sekolah Menengah Kejuruan yang berkarakter, berbudaya, berwawasan lingkungan,
                        menghasilkan insan yang bertaqwa, profesional, mampu berwirausaha dan berdaya saing global
                    </div>
                </div>

                <div
                    class="col-span-4 md:col-span-10 lg:col-span-12 xl:col-span-4 bg-gradient shadow-lg rounded-[20px] p-2 text-white p-10 hover:scale-105 transition">
                    <div class="flex flex-col justify-center">
                        <div class="font-Lato font-bold text-2xl basis-1/12 text-center">
                            SMP DARUSSALAM BLOKAGUNG 2
                        </div>
                        <div class="border-b-2 w-3/4 my-4 border-white mx-auto">

                        </div>
                    </div>
                    <div class="text-center font-Montserrat p-2">
                        Menjadi Sekolah Menengah Kejuruan yang berkarakter, berbudaya, berwawasan lingkungan,
                        menghasilkan insan yang bertaqwa, profesional, mampu berwirausaha dan berdaya saing global
                    </div>
                </div>

                <div
                    class="col-span-4 md:col-span-10 lg:col-span-12 xl:col-span-4 bg-white shadow-lg rounded-[20px] p-2 text-[#60A547] p-10 hover:scale-105 transition">
                    <div class="flex flex-col justify-center">
                        <div class="font-Lato font-bold text-2xl basis-1/12 text-center">
                            Madrasah Diniyah Darul Adzkiya
                        </div>
                        <div class="border-b-2 w-3/4 my-4 border-[#60A547] mx-auto">

                        </div>
                    </div>
                    <div class="text-center font-Montserrat p-2">
                        Menjadi Sekolah Menengah Kejuruan yang berkarakter, berbudaya, berwawasan lingkungan,
                        menghasilkan insan yang bertaqwa, profesional, mampu berwirausaha dan berdaya saing global
                    </div>
                </div>

            </div>
        </div>
    </div>




    <div id="visi" class="bg-gradient font-Lato text-white font-Lato font-normal py-10 px-12">
        <div class="mx-auto md:w-1/2 text-center">
            <div>
                <h1 class="font-bold text-3xl py-10">Visi</h1>
                <p class="font-Montserrat">Menjadi lembaga yang unggul dan kompetitif dalam penyelenggaraan
                    pendidikan agama yang dapat
                    melahirkan santri yang Amil Ilmiah, Ilmiah Amaliah dan ber-Akhlakul Karimah.
                </p>
            </div>
            <div class="">
                <h1 class="font-bold text-3xl py-10 ">Misi</h1>
                <p class="">
                <ol class="text-left list-decimal font-Montserrat">
                    <li>Membangun santri yang ber-IMTAQ dan ber-Akhlaqul Karimah.</li>
                    <li>Mengantarkan santri memiliki kematangan dan kedalaman ilmu agama Islam (diniyah)</li>
                    <li>Membekali santri dengan perangkat metodologi berfikir kritis dan mampu mentransformasikan
                        kutubat-turats dalam era kekinian.</li>
                    <li>Melahirkan santri yang menjadi kader dan penerus perjuangan ulama di masyarakat.</li>
                    <li>Mengamalkan dan menjadi teladan dalam kehidupan bermasyarakat.</li>
                </ol>







                </p>
            </div>
        </div>

    </div>




    <div class="pattern p-12" id="gallery">
        <h1 class="text-center bg-transparent font-Lato font-bold text-2xl">
            <span class="text-[#60A547] mt-10">Gallery</span>
        </h1>

        <div class="border-b-2 my-6 mx-auto md:w-1/2 border-[#60A547] border-dashed"></div>

        <div class="md:w-2/3  mx-auto">
            <div class="grid gird-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 gallery">
                <img class="rounded-lg object-cover" src="https://darussalam2.com/assets/gallery/1.jpg"
                    alt="">
                <img class="rounded-lg object-cover" src="https://darussalam2.com/assets/gallery/2.jpg"
                    alt="">
                <img class="rounded-lg object-cover" src="https://darussalam2.com/assets/gallery/3.jpg"
                    alt="">
                <img class="rounded-lg object-cover" src="https://darussalam2.com/assets/gallery/4.jpg"
                    alt="">
                <img class="rounded-lg object-cover" src="https://darussalam2.com/assets/gallery/5.jpg"
                    alt="">
                <img class="rounded-lg object-cover" src="https://darussalam2.com/assets/gallery/6.jpg"
                    alt="">
                <img class="rounded-lg object-cover" src="https://darussalam2.com/assets/gallery/7.jpg"
                    alt="">
                <img class="rounded-lg object-cover" src="https://darussalam2.com/assets/gallery/8.jpg"
                    alt="">
                <img class="rounded-lg object-cover" src="https://darussalam2.com/assets/gallery/9.jpg"
                    alt="">
            </div>
        </div>
    </div>



    <div class="w-full bg-gradient py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 w-10/12 mx-auto border-b-[1px] pb-10">
            <div class="w-full">


                <div class="text-left text-rose-50">
                    <div class="font-Lato text-sm md:text-lg font-bold mb-2">Yayasan PP. Darussalam Blokagung 2</div>
                    <div class="color-decor">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="font-Lato text-white mt-5">
                    <span class="font-bold">Alamat :</span>Jl. Raden Supono Krajan Setail Genteng Banyuwangi, 68465
                </div>
                <div class="text-white mt-5 font-medium">
                    <div><i class="fa-solid fa-envelope"></i><span class="ml-3">darstachannel@gmail.com</span></div>
                    <div><i class="fa-solid fa-phone"></i><span class="ml-3">(+62) 81 946 728 375</span></div>
                </div>

            </div>

            <div class="w-full text-white font-Lato">
                <h1 class="font-bold">Profile</h1>
                <p class="mt-5">Tentang Kami</p>
            </div>
            <div class="w-full">

            </div>
            <div class="w-full">

            </div>
        </div>
        <div class="md:flex justify-between mx-auto w-10/12 font-Lato text-white font-medium">
            <div>© Copyright Media Darussalam Blokagung 2 - Darsta Channel</div>
            <div class="md:flex justify-between gap-5">
                <div>Privacy Policy</div>
                <div>Term & Conditions</div>
            </div>
        </div>
    </div>
    <script src="https://darussalam2.com/dist/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                number: 1,
                loop: true,
                mouseDrag: false,
                touchDrag: false,
                pullDrag: false,
                freeDrag: false,
                dots: false,
                autoplay: true,
                autoplaySpeed: 5000,
                autoplayTimeout: 5000,
                slideTransition: 'ease-in-out',
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                margin: 10,
                items: 1,
                nav: true
            });

        });
    </script>
</body>

</html>
