<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>FitAcademy</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<!-- component -->
<body class="font-display">
    <div class="bg-[#3281C4]">
        <nav class="relative py-4 flex justify-center items-center">
            <a href=""><img class="h-28" src="{{ asset('image/Fit Academy 2022 Logo PNG.png') }}" alt=""></a>
        </nav>

        <div class="text-center text-white">
            <div class="mt-20">
                <h1 class="text-5xl leading-normal font-bold tracking-widest">Mau Belajar Efektif Tapi tetap Asik? <br> FitAcademy Tempatnya!</h1>
            </div>
            <div class="mt-24">
                <h2 class="text-3xl font-normal">Belajar Singkat, Skill Meningkat</h2>
            </div>
        </div>
    </div>

    <div class="flex justify-evenly">
        <div>
            <div class="h-full w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center pb-10 pt-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="" alt="gambar"/>
                    <h5 class="text-center mt-10 mb-1 text-xl font-semibold text-gray-900 dark:text-white">Si Paling <br> Ngantor</h5>
                    <span class="text-center mt-10 px-16 text-sm text-gray-500 dark:text-gray-400">Cocok buat kamu yang butuh tempat untuk melatih dan meningkatkan skill karyawan di berbagai bidang.</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-[#2F97D4] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="h-full w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center pb-10 pt-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="" alt="gambar"/>
                    <h5 class="text-center mt-10 mb-1 text-xl font-semibold text-gray-900 dark:text-white">Si Paling <br> Ngonten</h5>
                    <span class="text-center mt-10 px-16 text-sm text-gray-500 dark:text-gray-400">Cocok buat kamu yang hobi menyalurkan ide melalui konten yang kreatif dan edukatif.</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-[#2F97D4] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="h-full w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center pb-10 pt-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="" alt="gambar"/>
                    <h5 class="text-center mt-10 mb-1 text-xl font-semibold text-gray-900 dark:text-white">Si Paling <br> Ngide</h5>
                    <span class="text-center mt-10 px-16 text-sm text-gray-500 dark:text-gray-400">Cocok buat kamu yang hobi eksplor berbagai hal baru dengan cara seru dan tidak membosankan.</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-[#2F97D4] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-[#F58726] mt-32">
        <h2 class="text-white text-3xl leading-normal font-bold tracking-widest text-center pt-28">Get More Information</h2>
        <h5 class="text-white pt-10 text-center">Aenean commodo ligula eget dolor. Aenean massa. <br> Cum sociis natoque penatibus et magnis dis parturient monte</h5>
    </footer>
</body>

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script>
// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});
</script>
</html>
