@extends('landingPage.master')

@section('konten')
<div class="mb-16 h-screen w-full relative font-publicSans">
    <nav class="relative flex justify-between md:py-2 lg:py-3 2xl:py-4">
        <a href="#"><img class="ml-4 h-28 md:h-16 lg:h-24 2xl:h-28" src="{{ asset('image/Fit Academy 2022 Logo PNG.png') }}" alt=""></a>
        <a href="" class="place-self-center px-10">
            <button class="px-4 py-2 w-32 h-16 ml-4 text-xl font-bold text-[#F58726] hover:text-white border-[3px] border-[#F58726] rounded-full hover:bg-[#F58726] transition duration-500 ease-in-out">
                Blog
            </button>
        </a>
    </nav>

    <div class="text-center">
        <div class="mt-20 md:mt-12 lg:mt-16 2xl:mt-20">
            <h1 class="px-10 text-[#2F97D4] text-3xl font-bold leading-normal tracking-widest md:text-xl lg:text-3xl 2xl:text-5xl">Dapatkan Berbagai Modul Penunjang Kariermu</h1>
        </div>
        <div class="mt-16 lg:mt-16">
            <h2 class="text-lg font-normal md:text-lg lg:text-xl 2xl:text-3xl">Pilih Siapa Dirimu? <br>
                Temukan Konten Pembelajaran yang Sesuai
            </h2>
        </div>
    </div>

    <div class="flex flex-col items-center mt-8 lg:flex-row lg:justify-evenly lg:mt-24">
        <div class="max-w-sm maxh rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('image/Group 12.png') }}" alt="" />
            </a>
            <div class="flex justify-center space-x-3 md:mt-6">
                <a href="{{ url('/contentcreator') }}" class="inline-flex items-center px-10 py-3 text-sm font-medium text-center text-white bg-[#2F97D4] rounded-lg hover:bg-[#F58726]">Pilih</a>
            </div>
        </div>
        <div class="flex flex-col items-center mt-50 lg:flex-row lg:justify-evenly lg:mt-90">
            <div class="max-w-sm maxh rounded-lg shadow">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('image/foto.png') }}" alt=""/>
                </a>
                <div class="flex justify-center space-x-7 md:mt-10">
                    <a href="{{ url('/contentcreator') }}" class="inline-flex items-center px-10 py-3 text-sm font-medium text-center text- bg-[#2F97D4] rounded-lg hover:bg-[#F58726]">Pilih</a>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center mt-8 lg:flex-row lg:justify-evenly lg:mt-24">
            <div class="max-w-sm maxh rounded-lg shadow">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('image/Group 12.png') }}" alt="" />
                </a>
                <div class="flex justify-center space-x-3 md:mt-6">
                    <a href="{{ url('/contentcreator') }}" class="inline-flex items-center px-10 py-3 text-sm font-medium text-center text-white bg-[#2F97D4] rounded-lg hover:bg-[#F58726]">Pilih</a>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="h-72"></div>

<footer class="bg-[#2F97D4]  text-[#fbf7f4] text-center font-inter leading-normal md:h-[32rem]">
    <h1 class="text-2xl font-semibold md:text-5xl">FitAcademy</h1>
    <h3 class="text-lg font-medium">Platform pembelajaran berbasis microlearning</h3>
    <h2 class="px-6 mt-6 text-base font-normal md:text-xl ">Ayo bergabung dan menjadi lebih dekat dengan FitAcademy! <br> Kunjungi sosial media kami untuk mendapatkan informasi terbaru</h2>

    <div class="flex flex-col items-center mt-14 font-normal text-xl md:flex-row md:justify-center">
        <a class="group" href="https://www.tiktok.com/@fitacademy.id?_t=8aPRooWJ6eI&_r=1">
            <div class="flex items-center">
                <div class="bg-[url('/image/tiktok-oren.svg')] group-hover:bg-[url('image/tiktok-biru.svg')] w-7 h-7 md:w-10 md:h-10"></div>
                <h3 class="ml-8 md:ml-5 group-hover:text-[#3281C4]">fitacademy.id</h3>
            </div>
        </a>

        <a class="group" href="https://www.instagram.com/fitacademy_id/">
            <div class="flex items-center mt-5 ml-2 md:mt-0 lg:ml-8">
                <div class="bg-[url('/image/instagram-oren.svg')] group-hover:bg-[url('image/instagram-biru.svg')] w-7 h-7 md:w-10 md:h-10"></div>
                <h3 class="ml-8 group-hover:text-[#3281C4] md:ml-5">fitacademy_id</h3>
            </div>
        </a>
    </div>

    <div class="text-base text-center font-normal mt-14 lg:text-sm">
        <h5>Jl. Pangeran Wirosobo Gg. Wiropamungkas No.8, Sorosutan, Kec. Umbulharjo, <br> Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162</h5>
    </div>

    <h6 class="mb-10 mt-12 md:mt-24 text-xs">Copyright © 2023 FitAcademy. All rights reserved.</h6>
</footer>


@endsection

