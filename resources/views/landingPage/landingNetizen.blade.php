@extends('landingPage.master')

@section('konten')
<div class="bg-[#3281C4] h-[48rem]">
    <header class="relative flex items-center justify-center py-4">
        <a href=""><img class="h-28" src="{{ asset('image/Fit Academy 2022 Logo PNG.png') }}" alt=""></a>
    </header>

    <div class="text-center text-white lg:text-start lg:ml-36">
        <div class="mt-10">
            <h1 class="text-xl font-bold leading-normal tracking-widest md:text-3xl lg:text-4xl lg:text-start lg:pr-80">Career Path: Sukses Menjadi Seorang Copywriter</h1>
        </div>

        <div class="flex flex-row-reverse lg:mt-9">
            <div class="border-4 border-red-500 h-36 mt-14">
                <img src="" alt="">
            </div>

            <div class="px-8 mt-5 border-4 lg:px-0 lg:mr-60 border-emerald-800">
                <h2 class="text-sm font-semibold md:text-xl lg:mb-5">Deskripsi</h2>
                <h2 class="px-6 text-sm font-normal text-justify lg:px-0 md:text-base">Di era digital saat ini, kemampuan untuk menulis copy sangat dibutuhkan. Dengan mempelajari copywriting, Anda akan mampu membuat iklan yang bagus, salah satunya bisa Anda dapatkan di modul ini. Materinya mencakup skillset hingga jenjang karier seorang copywriter. Nantinya Anda akan menguasai kemampuan copywriting secara mendalam dan siap menjadi seorang copywriter yang handal. Selain itu, profesi copywriting banyak dicari dan cukup menjanjikan di masa depan.</h2>
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
                <h2 class="mb-2 text-xl font-semibold text-center text-gray-900 mt-11 md:px-8 lg:text-3xl lg:mb-10">DAPATKAN E-BOOK LENGKAP INI SECARA GRATIS!</h2>
                <div class="flex flex-row mx-4 mt-8 mb-6 md:mx-7">
                    <input type="email" id="default-input"
                        placeholder="Masukkan alamat email"
                        class="placeholder:italic placeholder:text-xs basis-3/4 md:basis-11/12 rounded-full bg-gray-200 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <button class="px-4 py-2 ml-4 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700">
                        KIRIM
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('landingPage.footer')
@endsection
