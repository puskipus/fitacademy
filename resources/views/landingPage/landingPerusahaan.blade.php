@extends('landingPage.master')

@section('konten')
<div class="bg-[#3281C4] lg:h-[60rem] px-7 lg:pl-40">
    <header class="relative flex justify-start">
        <a href=""><img class="h-20 lg:h-24" src="{{ asset('image/Fit Academy 2022 Logo PNG.png') }}" alt=""></a>
    </header>

    <div class="mt-10 lg:mt-20 text-center text-white flex flex-col lg:flex-row lg:text-start">
        <div class="order-1">
            <div class="order-1">
                <h1 class="text-xl leading-normal tracking-widest lg:text-4xl lg:text-start">
                    <b class="font-bold font-nunito">EMPLOYEE 101:</b class="font-semibold lg:font-normal"> Cara Ampuh
                    <br class="font-semibold lg:font-normal">dan Efektif Meningkatkan Kinerja
                    <br class="font-semibold lg:font-normal"> Karyawan agar Lebih Produktif
                </h1>
            </div>

            <div class="block lg:hidden lg:w-[250rem] order-2 lg:order-3">
                <img src="{{ asset('image/MOCKUP-1.png') }}" alt="">
            </div>

            <div class="order-3">
                <div class="lg:mt-8 lg:px-0">
                    <h2 class="px-6 text-sm font-poppins font-normal text-justify lg:px-0 lg:text-base">Modul pembelajaran ini didesain bagi Anda yang ingin meningkatkan kinerja karyawan agar menjadi lebih produktif ketika bekerja. Dalam modul ini, Anda akan mengetahui bagaimana langkah-langkah hingga manfaat yang nantinya akan didapatkan ketika produktivitas karyawan meningkat. Setelah selesai membaca modul ini, Anda akan mampu memahami dan menerapkan berbagai macam cara untuk meningkatkan kinerja karyawan secara optimal. Dampaknya, perusahaan atau bisnis yang Anda jalankan bisa memperoleh profit yang maksimal.</h2>
                </div>

                <div class="mt-14 font-poppins font-semibold text-xl">
                    <h2>DAPATKAN E-BOOK LENGKAP INI SECARA GRATIS!</h2>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="flex flex-row mt-4 mb-6">
                        <input type="email" id="email" name="email"
                            placeholder="masukkan alamat email"
                            class="placeholder:text-xs placeholder:pl-4 basis-3/4 h-14 rounded-full bg-gray-200 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:basis-9/12">
                        <button class="px-4 py-2 w-32 ml-4 font-bold text-white bg-[#F58726] rounded-full hover:bg-[#3F3F3F] transition duration-500 ease-in-out">
                            KIRIM
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="hidden lg:block lg:w-[250rem] order-2 lg:order-3">
            <img src="{{ asset('image/MOCKUP-1.png') }}" alt="">
        </div>
    </div>
</div>

@include('landingPage.footer')
@endsection

