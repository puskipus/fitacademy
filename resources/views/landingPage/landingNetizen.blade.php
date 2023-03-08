<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FitAcademy</title>
</head>
<body class="font-display">
    <div class="bg-[#3281C4] h-[48rem]">
        <header class="relative py-4 flex justify-center items-center">
            <a href=""><img class="h-28" src="{{ asset('image/Fit Academy 2022 Logo PNG.png') }}" alt=""></a>
        </header>

        <div class="text-center lg:text-start text-white lg:ml-36">
            <div class="mt-10">
                <h1 class="text-xl md:text-3xl leading-normal font-bold tracking-widest lg:text-4xl lg:text-start lg:pr-80">Career Path: Sukses Menjadi Seorang Copywriter</h1>
            </div>

            <div class="flex flex-row-reverse lg:mt-9">
                <div class="border-red-500 border-4 h-36 mt-14">
                    <img src="" alt="">
                </div>

                <div class="mt-5 px-8 lg:px-0 lg:mr-60 border-4 border-emerald-800">
                    <h2 class="font-semibold text-sm md:text-xl lg:mb-5">Deskripsi</h2>
                    <h2 class="px-6 lg:px-0 font-normal text-justify text-sm md:text-base">Di era digital saat ini, kemampuan untuk menulis copy sangat dibutuhkan. Dengan mempelajari copywriting, Anda akan mampu membuat iklan yang bagus, salah satunya bisa Anda dapatkan di modul ini. Materinya mencakup skillset hingga jenjang karier seorang copywriter. Nantinya Anda akan menguasai kemampuan copywriting secara mendalam dan siap menjadi seorang copywriter yang handal. Selain itu, profesi copywriting banyak dicari dan cukup menjanjikan di masa depan.</h2>
                </div>
            </div>

        </div>
    </div>

    <div class="absolute w-full -z-10">
        <div class="bg-[#3281C4] h-44"></div>
        <div class="bg-[#F58726] h-48"></div>
    </div>

    <div class="mx-6 lg:mx-64">
        <div class="mt-11 w-full lg:max-w-full lg:flex">
            <div class="border border-gray-400 shadow-xl bg-white rounded-3xl p-4 flex flex-col justify-between leading-normal lg:border-gray-400">
                <div class="lg:px-32">
                    <h2 class="mt-11 text-center text-gray-900 font-semibold text-xl mb-2 md:px-8 lg:text-3xl lg:mb-10">DAPATKAN E-BOOK LENGKAP INI SECARA GRATIS!</h2>
                    <div class="mt-8 mb-6 mx-4 md:mx-7 flex flex-row">
                        <input type="email" id="default-input"
                            placeholder="Masukkan alamat email"
                            class="placeholder:italic placeholder:text-xs basis-3/4 md:basis-11/12 rounded-full bg-gray-200 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <button class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            KIRIM
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<footer class="bg-[#F58726] h-[30rem] px-6 mt-7 text-white md:h-96">
    <h1 class="text-white text-center font-semibold text-3xl md:text-2xl pt-7 md:pt-14">FitAcademy</h1>
    <h3 class="text-center text-xl font-bold">Platform pembelajaran berbasis microlearning</h3>
    <h2 class="text-white text-center font-normal text-base mt-6 px-6 md:text-xl ">Ayo bergabung dan menjadi lebih dekat dengan FitAcademy! Kunjungi sosial media kami untuk mendapatkan informasi terbaru</h2>

    <div class="flex flex-col items-center mt-8 md:flex-row md:justify-center">
        <a class="group" href="https://www.tiktok.com/@fitacademy.id?_t=8aPRooWJ6eI&_r=1">
            <div class="flex items-center">
                <div class="bg-[url('/image/tiktok-icon.svg')] group-hover:bg-[url('image/tiktok-dark-icon.svg')] w-7 h-7 md:w-10 md:h-10"></div>
                <h3 class="ml-8 md:ml-5 group-hover:text-[#3f3f3f]">fitacademy.id</h3>
            </div>
        </a>

        <a class="group" href="https://www.instagram.com/fitacademy_id/">
            <div class="ml-2 mt-5 md:mt-0 flex items-center lg:ml-8">
                <div class="bg-[url('/image/instagram-icon.svg')] group-hover:bg-[url('image/instagram-dark-icon.svg')] w-7 h-7 md:w-10 md:h-10"></div>
                <h3 class="ml-8 group-hover:text-[#3f3f3f] md:ml-5">fitacademy_id</h3>
            </div>
        </a>
    </div>

    <div class="mt-9 text-center font-normal text-xs lg:text-sm">
        <h6>Jl. Pangeran Wirosobo Gg. Wiropamungkas No.8, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162</h6>
    </div>
</footer>
</html>
