@extends('landingPage.master')

@section('konten')
<div class="bg-[#3281C4] h-[48rem]">
    <header class="relative flex items-center justify-center py-4">
        <a href=""><img class="h-28" src="{{ asset('image/Fit Academy 2022 Logo PNG.png') }}" alt=""></a>
    </header>

    <div class="text-center text-white lg:text-start lg:ml-36">
        <div class="mt-10">
            <h1 class="text-xl leading-normal tracking-widest md:text-3xl lg:text-4xl lg:text-start">
                <b class="font-black">EMPLOYEE 101:</b> Cara Ampuh dan <br>Efektif Meningkatkan Kinerja <br>Karyawan agar Lebih Produktif</h1>
        </div>

        <div class="flex flex-row-reverse lg:mt-9">
            <div class="border-4 border-green-500 h-36 mt-14">
                <img src="" alt="">
            </div>

            <div class="px-8 mt-5 border-4 lg:px-0 lg:mr-60 border-emerald-800">
                <h2 class="text-sm font-semibold md:text-xl lg:mb-5">Deskripsi</h2>
                <h2 class="px-6 text-sm font-normal text-justify lg:px-0 md:text-base">Modul pembelajaran ini didesain bagi Anda yang ingin meningkatkan kinerja karyawan agar menjadi lebih produktif. Dalam modul ini juga Anda akan mempelajari tentang langkah-langkah, tools dan perangkat yang kamu butuhkan. Setelah selesai membaca modul ini, Anda akan mampu menguasai dan menerapkan berbagai macam teknik untuk meningkatkan kinerja karyawan yang Anda miliki sehingga perusahaan yang Anda miliki bisa beroperasi dengan optimal dan bahkan bisa mendatangkan profit yang maksimal.</h2>
            </div>
        </div>

    </div>
</div>

<div class="absolute w-full -z-10">
    <div class="bg-[#3281C4] h-44"></div>
    <div class="bg-[#F58726] h-48"></div>
</div>

<div class="mx-6 lg:mx-64">
    <div class="w-full mt-11 lg:max-w-full lg:flex">
        <div class="flex flex-col justify-between p-4 leading-normal bg-white border border-gray-400 shadow-xl rounded-3xl lg:border-gray-400">
            <div class="lg:px-32">
                <h2 class="mb-2 text-xl font-semibold text-center text-gray-900 mt-11 md:px-8 lg:text-3xl lg:mb-10">DAPATKAN E-BOOK LENGKAP INI SECARA GRATIS!  </h2>
                <form action="" method="POST">
                    @csrf
                    <div class="flex flex-row mx-4 mt-8 mb-6 md:mx-7">
                        <input type="email" id="email" name="email"
                            placeholder="Masukkan alamat email"
                            class="placeholder:italic placeholder:text-xs basis-3/4 md:basis-11/12 rounded-full bg-gray-200 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <button class="px-4 py-2 ml-4 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700">
                            KIRIM
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('landingPage.footer')
@endsection

