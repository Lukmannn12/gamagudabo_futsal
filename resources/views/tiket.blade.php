@extends('layout.nav')

@section('home')

<section id="tiket" class="pt-32">
    <div class="max-w-7xl mx-auto">
        <div class="flex xl:flex-row lg:flex-row md:flex-col sm:flex-col justify-center space-x-3 space-y-3">
            <div class="max-w-4xl mx-auto px-2">
                <h1 class="font-medium text-[#013C67] text-sm">Pemesanan Tiket</h1>
                <h1 class="font-bold text-black text-xl py-5">Tiket Futsal Mudah, Praktis, dan Terjamin!</h1>
                <p class="font-extralight text-[#191E25] text-sm leading-6 text-justify max-w-xl">Tidak perlu repot lagi! Di Gamagudabo, Anda dapat membeli tiket futsal untuk menyaksikan pertandingan favorit dengan cara yang cepat, aman, dan praktis. 
                    Kami menyediakan platform pemesanan tiket berbayar yang memudahkan Anda untuk mendapatkan tiket masuk ke berbagai pertandingan futsal—baik itu event lokal maupun kompetisi besar.</p>
                <div class="flex flex-col py-10 px-5 space-y-5">
                    <div class="flex flex-row space-x-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0,0,256,256">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(6.4,6.4)"><path d="M20,38.5c-10.2,0 -18.5,-8.3 -18.5,-18.5c0,-10.2 8.3,-18.5 18.5,-18.5c10.2,0 18.5,8.3 18.5,18.5c0,10.2 -8.3,18.5 -18.5,18.5z" fill="#8e66ff" stroke="none" stroke-width="1"></path><path d="M20,2c9.9,0 18,8.1 18,18c0,9.9 -8.1,18 -18,18c-9.9,0 -18,-8.1 -18,-18c0,-9.9 8.1,-18 18,-18M20,1c-10.5,0 -19,8.5 -19,19c0,10.5 8.5,19 19,19c10.5,0 19,-8.5 19,-19c0,-10.5 -8.5,-19 -19,-19z" fill="#8e66ff" stroke="none" stroke-width="1"></path><path d="M11.2,20.1l5.8,5.8l13.2,-13.2" fill="none" stroke="#ffffff" stroke-width="3"></path></g></g>
                            </svg>
                        <p class="font-medium text-sm text-[#191E25]">Pilih Tanggal Pertandingan</p>
                    </div>
                    <div class="flex flex-row space-x-3 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0,0,256,256">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(6.4,6.4)"><path d="M20,38.5c-10.2,0 -18.5,-8.3 -18.5,-18.5c0,-10.2 8.3,-18.5 18.5,-18.5c10.2,0 18.5,8.3 18.5,18.5c0,10.2 -8.3,18.5 -18.5,18.5z" fill="#ff723b" stroke="none" stroke-width="1"></path><path d="M20,2c9.9,0 18,8.1 18,18c0,9.9 -8.1,18 -18,18c-9.9,0 -18,-8.1 -18,-18c0,-9.9 8.1,-18 18,-18M20,1c-10.5,0 -19,8.5 -19,19c0,10.5 8.5,19 19,19c10.5,0 19,-8.5 19,-19c0,-10.5 -8.5,-19 -19,-19z" fill="#ff723b" stroke="none" stroke-width="1"></path><path d="M11.2,20.1l5.8,5.8l13.2,-13.2" fill="none" stroke="#ffffff" stroke-width="3"></path></g></g>
                        </svg>
                        <p class="font-medium text-sm text-[#191E25]">Total Tiket</p>
                    </div>
                    <div class="flex flex-row space-x-3 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0,0,256,256">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(6.4,6.4)"><path d="M20,38.5c-10.2,0 -18.5,-8.3 -18.5,-18.5c0,-10.2 8.3,-18.5 18.5,-18.5c10.2,0 18.5,8.3 18.5,18.5c0,10.2 -8.3,18.5 -18.5,18.5z" fill="#f14c5d" stroke="none" stroke-width="1"></path><path d="M20,2c9.9,0 18,8.1 18,18c0,9.9 -8.1,18 -18,18c-9.9,0 -18,-8.1 -18,-18c0,-9.9 8.1,-18 18,-18M20,1c-10.5,0 -19,8.5 -19,19c0,10.5 8.5,19 19,19c10.5,0 19,-8.5 19,-19c0,-10.5 -8.5,-19 -19,-19z" fill="#f14c5d" stroke="none" stroke-width="1"></path><path d="M11.2,20.1l5.8,5.8l13.2,-13.2" fill="none" stroke="#ffffff" stroke-width="3"></path></g></g>
                        </svg>
                        <p class="font-medium text-sm text-[#191E25]">Lakukan pembayaran</p>
                    </div>
                </div>
            </div>
            <div class="lg:px-10">
            <img src="{{ asset('image/banner.jpg') }}" alt="banner" class="w-auto h-[492px] mx-auto" >
            </div>

        </div>

    </div>

</section>
<section id="form" class="pt-32">
    <div style="background-image: url('/image/Background.jpg'); background-size: cover; background-position: center;">
        <div class="max-w-6xl mx-auto py-10">
            <h1 class="font-semibold text-xl text-white text-center py-2">Pemesanan Tiket</h1>
            <p class="font-light text-[15px] text-white text-center">Pesan tiket futsal dengan mudah! Pilih pertandingan, tentukan tempat duduk, dan bayar dengan aman</p>
            <form action="{{ route('simpandata')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex lg:flex-row md:flex-col sm:flex-col py-20 lg:space-y-0 md:space-y-10 sm:space-y-10">
                    <div class="flex flex-col space-y-7 rounded-lg justify-center items-center px-5">
                        <div>
                            <label for="nama" class="block text-white text-[15px] font-medium mb-2">Nama</label>
                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                class="w-[531px] h-[37px] px-4 border text-xs border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Masukkan Nama"
                                required />
                        </div>
                        <div>
                            <label for="email" class="block text-white text-[15px]font-medium mb-2">Email</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="w-[531px] h-[37px] px-4 border text-xs border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Masukkan Email" 
                                required />
                        </div>
                        <div>
                            <label for="handphone" class="block text-white text-[15px]font-medium mb-2">No Handphone</label>
                            <input
                                type="text"
                                id="no_hp"
                                name="no_hp"
                                class="w-[531px] h-[37px] px-4 border text-xs border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Masukkan Nomor Hp" 
                                required />
                        </div>
                        <div>
                            <label for="tiket" class="block text-white text-[15px]font-medium mb-2">Jumlah Tiket</label>
                            <input
                                type="text"
                                id="jumlah_tiket"
                                name="jumlah_tiket"
                                class="w-[531px] h-[37px] px-4 border text-xs border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Masukkan Jumlah Tiket" 
                                required
                                 oninput="calculateTotal()" />
                        </div>
                    </div>
                    <div class="flex flex-col max-w-5xl mx-auto">
                        <h1 class="font-medium text-[15px] text-white pb-3">Tanggal Pertandingan</h1>
                            <select class="form-select block text-sm px-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" name="tanggal_id">
                                <option selected>Pilih Tanggal</option>
                                @foreach ($tanggals as $tanggal)
                                    <option value="{{ $tanggal->id }}">{{ $tanggal->tanggal }}</option>
                                @endforeach
                            </select>
                    </div>

                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-[#FF723B] px-36 py-2 rounded-full text-white">Pesan</button>
                </div>
            </form>
            <div class="flex justify-end">
                <img src="{{ asset('image/logo4.png') }}" alt="logo2">
            </div>
        </div>
    </div>
</section>



@endsection