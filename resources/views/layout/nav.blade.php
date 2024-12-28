<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gamagudabo</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>


</head>

<body>
    <nav class="bg-[#FAFAFA]">
        <div class="container mx-auto flex items-center justify-between px-4 py-4">
            <!-- Logo -->
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo" class="w-[104px] h-[25px]">

            <!-- Toggle Button -->
            <button id="menu-toggle" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-300">
                <svg id="hamburger-icon" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <svg id="close-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Menu Items -->
            <div id="menu" class="hidden md:flex md:space-x-4">
                <a href="/" class="text-[#272930] text-[15px] font-medium hover:text-gray-600">Home</a>
                <a href="/tiket" class="text-[#272930] text-[15px] font-medium hover:text-gray-600">Tiket</a>
                <a href="/history" class="text-[#272930] text-[15px] font-medium hover:text-gray-600">History</a>
            </div>

            <div class="hidden md:flex items-center space-x-2" x-data="{ open: false }">
                @if(Auth::check())
                <!-- Jika User Sudah Login -->
                <div class="relative">
                    <button @click="open = !open" class="header-item text-black flex items-center space-x-2 px-4 py-2 rounded-md">
                        <img width="25" height="25" src="https://img.icons8.com/ios/50/user--v1.png" alt="user--v1" />
                        <span class="text-[15px]">Halo, {{ Auth::user()->name }}</span>
                    </button>
                    <!-- Dropdown Menu -->
                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-full bg-white border border-gray-300 rounded-md shadow-lg">
                        <ul>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="block w-full py-2 text-sm text-gray-700 hover:bg-gray-100">Keluar</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                @else
                <!-- Jika User Belum Login -->
                <a href="{{ route('login') }}" class="bg-white text-[#013C67] hover:bg-[#013C67] hover:text-white rounded-2xl px-5 py-2 text-center">Login Sebagai User</a>
                @endif


                <!-- Tautan Admin (Hanya tampil jika user belum login) -->
                @if(!Auth::check())
                <a href="/admin" class="bg-white text-[#013C67] hover:bg-[#013C67] hover:text-white rounded-2xl px-5 py-2 text-center">
                    Login Sebagai Admin
                </a>
                @endif
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <ul class="container mx-auto space-y-3 py-4">
                <li> <a href="/" class="text-[#272930] text-[15px] font-medium hover:text-gray-600">Home</a></li>
                <li><a href="/tiket" class="text-[#272930] text-[15px] font-medium hover:text-gray-600">Tiket</a></li>
                <li><a href="/history" class="text-[#272930] text-[15px] font-medium hover:text-gray-600">History</a></li>
                <li>
                    <form class="flex items-center space-x-2">
                        @if(Auth::check())
                        <!-- Jika User Sudah Login -->
                        <div class="relative">
                            <div x-data="{ open: false }" @click.away="open = false">
                                <button @click="open = !open" class="header-item text-black flex items-center space-x-2 px-4 py-2 rounded-md">
                                    <img width="25" height="25" src="https://img.icons8.com/ios/50/user--v1.png" alt="user--v1" />
                                    <span class="text-[15px]">Halo, {{ Auth::user()->name }}</span>
                                </button>
                                <!-- Dropdown Menu -->
                                <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-full bg-white border border-gray-300 rounded-md shadow-lg">
                                    <ul>
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Keluar</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @else
                        <!-- Jika User Belum Login -->
                        <a href="{{ route('login') }}" class="bg-white text-[#013C67] hover:bg-[#013C67] hover:text-white rounded-2xl px-5 py-2 text-center">Login Sebagai User</a>
                        @endif


                        <!-- Tautan Admin (Hanya tampil jika user belum login) -->
                        @if(!Auth::check())
                        <a href="/admin" class="bg-white text-[#013C67] hover:bg-[#013C67] hover:text-white rounded-2xl px-5 py-2 text-center">
                            Login Sebagai Admin
                        </a>
                        @endif
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>


    <div class="main-content">
        <main>@yield('home')</main>
    </div>

    <footer class="bg-[#F5F5F5] px-3">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 py-5 ">
                <div class="flex flex-col py-5 space-y-3">
                    <img src="{{ asset('image/logo.jpg') }}" alt="Logo" class="w-[104px] h-[25px]">
                    <p class="font-light text-[13px] text-justify mr-10">Bergabung dengan Dunia Futsal di Gamagudabo, Temukan Pertandingan, Komunitas, dan Semua yang Anda Butuhkan untuk Pengalaman Futsal Terbaik!</p>
                </div>
                <div class="flex flex-col py-5 space-y-3 pl-10">
                    <h1 class="text-[#272930] font-semibold text-base">Our Services</h1>
                    <div class="flex flex-col space-y-2">
                        <h1 class="text-[#272930] font-light text-sm">Home</h1>
                        <h1 class="text-[#272930] font-light text-sm">Tiket</h1>
                        <h1 class="text-[#272930] font-light text-sm">Jadwal Pertandingan</h1>
                    </div>
                </div>
                <div class="flex flex-col py-5 space-y-3 pl-5">
                    <h1 class="text-[#272930] font-semibold text-base">Sosial Media</h1>
                    <div class="flex flex-col space-y-1">
                        <div class="flex flex-row items-center space-x-2">
                            <i class="fa-brands fa-instagram text-xl text-[#272930]"></i>
                            <p class="text-[#272930] font-light text-sm">Instagram</p>
                        </div>
                        <div class="flex flex-row items-center space-x-2">
                            <i class="fa-brands fa-tiktok text-xl text-[#272930]"></i>
                            <p class="text-[#272930] font-light text-sm">Tiktok</p>
                        </div>
                        <div class="flex flex-row items-center space-x-2">
                            <i class="fa-brands fa-youtube text-xl text-[#272930]"></i>
                            <p class="text-[#272930] font-light text-sm">Youtube</p>
                        </div>
                    </div>
                </div>
                <a href="/tiket">
                        <div class="flex flex-col py-5 space-y-3 pr-4">
                        
                            <h1 class="text-[#272930] font-semibold text-base">Pesan Tiket</h1>
                            <button class="border border-[#013C67] bg-white py-2 rounded-full hover:bg-slate-100">
                                <span class="text-[#013C67]">Pesan</span></button>
                        </div>
                    </a>
            </div>
        </div>
    </footer>
    <div class="bg-[#191E25]">
        <h1 class="text-center py-3 text-white font-medium text-sm">Copyright 2024 Gamagudabo Championship All Right Reserved</h1>
    </div>
</body>

</html>