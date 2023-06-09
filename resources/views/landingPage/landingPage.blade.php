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

        <div class="h-full max-w-xs mt-8 bg-white border border-gray-200 shadow-xl rounded-3xl md:w-3/4">
            <div class="flex flex-col items-center pt-10 pb-10 bg-center bg-cover bg-no-repeat bg-[url('/image/cowok1-landingpage.jpg')]">
                <img class="mb-3 rounded-full shadow-lg w-52 h-52" src="{{ asset('image/si paling ngonten.png') }}" alt="gambar"/>
                <h5 class="mt-10 mb-1 text-base font-semibold text-center text-gray-900 md:text-xl">Content <br>Creator</h5>
                <span class="px-12 mt-10 text-sm text-center text-gray-500">Siapapun yang ingin menyalurkan ide dengan konten yang kreatif, edukatif, dan interaktif</span>
                <div class="flex pt-10 mt-10 space-x-3 md:mt-6">
                    <a href="{{ url('/contentcreator') }}" class="inline-flex items-center px-10 py-3 text-sm font-medium text-center text-white bg-[#2F97D4] rounded-lg hover:bg-[#F58726]">Pilih</a>
                </div>
            </div>
        </div>

        <div class="h-full max-w-xs mt-8 bg-white border border-gray-200 shadow-xl rounded-3xl md:w-3/4">
            <div class="flex flex-col items-center pt-10 pb-10">
                <img class="mb-3 rounded-full shadow-lg w-52 h-52" src="{{ asset('image/si paling ngide.png') }}" alt="gambar"/>
                <h5 class="mt-10 mb-1 text-base font-semibold text-center text-gray-900 md:text-xl">Netizen</h5>
                <span class="px-12 mt-16 text-sm text-center text-gray-500">Orang-orang yang suka dan tertarik untuk  mempelajari berbagai hal baru dengan cara seru</span>
                <div class="flex pt-10 mt-10 space-x-3 md:mt-6">
                    <a href="{{ url('/netizen') }}" class="inline-flex items-center px-10 py-3 text-sm font-medium text-center text-white bg-[#2F97D4] rounded-lg hover:bg-[#F58726]">Pilih</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="h-72"></div>

<footer class="bg-[#F58726] mt-[80rem] h-[27rem] text-white lg:mt-80 lg:h-96">
    <div class="px-6">
        <h1 class="text-3xl font-bold text-center text-white pt-7 md:text-2xl md:pt-14">FitAcademy</h1>
        <h3 class="text-xl font-bold text-center">Platform pembelajaran berbasis microlearning</h3>
        <h2 class="px-6 mt-6 text-base font-normal text-center text-white md:text-xl ">Ayo bergabung dan menjadi lebih dekat dengan FitAcademy! <br>Kunjungi sosial media kami untuk mendapatkan informasi terbaru</h2>

        <div class="flex flex-col items-center mt-8 md:flex-row md:justify-center">
            <a class="group" href="https://www.tiktok.com/@fitacademy.id?_t=8aPRooWJ6eI&_r=1">
                <div class="flex items-center">
                    <div class="bg-[url('/image/tiktok-icon.svg')] group-hover:bg-[url('image/tiktok-dark-icon.svg')] w-7 h-7 md:w-10 md:h-10"></div>
                    <h3 class="ml-8 md:ml-5 group-hover:text-[#3f3f3f]">fitacademy.id</h3>
                </div>
            </a>

            <a class="group" href="https://www.instagram.com/fitacademy_id/">
                <div class="flex items-center mt-5 ml-2 md:mt-0 lg:ml-8">
                    <div class="bg-[url('/image/instagram-icon.svg')] group-hover:bg-[url('image/instagram-dark-icon.svg')] w-7 h-7 md:w-10 md:h-10"></div>
                    <h3 class="ml-8 group-hover:text-[#3f3f3f] md:ml-5">fitacademy_id</h3>
                </div>
            </a>
        </div>

        <div class="text-xs font-normal text-center mt-9 lg:text-sm">
            <h6>Jl. Pangeran Wirosobo Gg. Wiropamungkas No.8, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162</h6>
        </div>
    </div>
</footer>
@endsection

