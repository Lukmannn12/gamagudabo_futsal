@extends('layout.nav')

@section('home')

<section id="login">
    <div class="max-w-5xl mx-auto py-32">
        <div class="flex md:flex-row sm:flex-col justify-center items-center md:px-2">
            <img src="{{ asset('image/logo3.png') }}" alt="logo3" class="w-[450px] h-[424px] mx-auto">
            <div class="flex flex-col py-2 text-white h-[500px] w-[564px] rounded-lg"
                style="background-image: url('/image/Background.jpg'); background-size: cover; background-position: center;">
                <div class="flex flex-col rounded-lg px-14 pt-8">
                    <h1 class="text-md font-bold mb-2">Masuk Akun</h1>
                    <p class="text-[12px] font-light">Silakan Masuk ke Akun Anda untuk Akses Lebih Mudah ke Pertandingan, Tiket, dan Semua Fitur Gamagudabo!</p>
                </div>
                <form action="{{route('loginuser')}}" method="post" class="form-login">
                    @csrf
                    <div class="flex flex-col space-y-4 mt-4 px-14 rounded-lg">
                    
                        <div>
                            <label for="email" class="block text-white text-[15px] font-medium mb-2">Email</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="w-full px-4 py-2 border text-xs text-black border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Masukkan Email"
                                required />
                        </div>
                        <div>
                            <label for="password" class="block text-white text-[15px]font-medium mb-2">Password</label>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="w-full px-4 py-2 border text-xs text-black border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Masukkan Password" 
                                required />
                        </div>
                    </div>
                    <div class="px-14 py-4">
                        <button
                            type="submit"
                            class="w-full bg-[#FF543E] text-white py-2 rounded-full transition mt-4">
                            Masuk
                        </button>
                    </div>
                    <p class="text-center font-medium text-[13px]">Belum punya akun? <a href="{{ route('register') }}" class="underline">Daftar</a></p>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection