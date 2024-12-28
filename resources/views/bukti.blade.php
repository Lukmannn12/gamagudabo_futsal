@extends('layout.nav')

@section('home')
<body>
    <section id="bukti" class="py-20 px-2">
        <div class="max-w-5xl mx-auto ">
            <div class="flex flex-col space-y-5">
                <div class="flex flex-row justify-between items-center py-5">
                    <div class="flex flex-col w-60 space-y-2">
                        <h1 class="font-medium text-2xl text-gray-700">Bukti Pembayaran</h1>
                        <div class="flex flex-row justify-between bg-blue-600 items-center text-white px-4 rounded-2xl w-48 py-1">
                            <img width="30" height="30" src="https://img.icons8.com/dusk/64/airplane-mode-on.png" alt="airplane-mode-on" />
                            <div class="border-l-2 border-gray-400 h-6"></div>
                            <p class="font">Tiket Futsal</p>
                        </div>
                    </div>
                    <img src="{{ asset('image/logo.jpg') }}" alt="Logo" class="w-[200px] h-[50px]">
                </div>
                <h1 class="font-medium text-lg ">Detail Pemesanan</h1>
                <input type="hidden" name="pemesanan_id" value="{{ $pemesans->id }}">
                <div class="flex flex-row justify-between items-center lg:space-x-10 sm:space-x-0">
                    <div class="flex flex-row justify-between border border-gray-300 items-center text-white px-4 rounded-2xl h-28 w-full">
                        <div class="flex flex-col py-2 space-y-2">
                            <h1 class="text-gray-400 font-medium lg:text-base sm:text-sm">Nama Lengkap</h1>
                            <p class="text-black font-medium text-md">{{ $pemesans->nama }}</p>
                        </div>
                        <div class="flex flex-col py-2 space-y-2">
                            <h1 class="text-gray-400 font-medium lg:text-base sm:text-sm">Email</h1>
                            <p class="text-black font-medium text-md">{{ $pemesans->email }}</p>
                        </div>
                        <div class="flex flex-col py-2 space-y-2">
                            <h1 class="text-gray-400 font-medium lg:text-base sm:text-sm">Nomor Handphone</h1>
                            <p class="text-black font-medium text-sm">{{ $pemesans->no_hp }}</p>
                        </div>
                    </div>
                    <img src="{{ asset('image/paid.png') }}" alt="Logo" class="w-[120px] h-[120px] object-cover">
                </div>
                <h1 class="font-medium text-lg ">Detail Pembayaran</h1>
                <div class="flex flex-col bg-sky-50 border border-gray-400 rounded-md">
                    <div class="flex flex-row p-5">
                        <div class="flex flex-col space-y-1">
                            <h1 class="text-gray-400 font-medium text-sm">Metode Pembayaran</h1>
                            <h1 class="text-black font-medium text-md">Transfer Bank</h1>
                        </div>
                    </div>
                    <div class="overflow-x-auto bg-white p-5">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="py-5 px-4 text-left text-sm font-medium">
                                        No
                                    </th>
                                    <th class="py-5 px-4 text-left text-sm font-medium">
                                        Produk
                                    </th>
                                    <th class="py-5 px-4 text-left text-sm font-medium">
                                        Jumlah
                                    </th>
                                    <th class="py-5 px-4 text-left text-sm font-medium">
                                        Tanggal
                                    </th>
                                    <th class="py-5 px-4 text-end text-sm font-medium">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-2 px-4 border-b text-sm">1</td>
                                    <td class="py-2 px-4 border-b text-sm">Tiket Futsal</td>
                                    <td class="py-2 px-4 border-b text-sm">{{ $pemesans->jumlah_tiket }}</td>
                                    <td class="py-2 px-4 border-b text-sm"> {{  \Carbon\Carbon::parse($pemesans->tanggal->tanggal)->format('d F Y')}}</td>
                                    <td class="py-2 px-4 border-b text-end text-sm"> Rp {{ number_format($pemesans->total, 2, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-row justify-between p-5">
                        <h1 class="font-medium text-xl text-gray-700">Total Pembayaran</h1>
                        <h1 class="font-medium text-base text-[#013C67]">Rp {{ number_format($pemesans->total, 2, ',', '.') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

@endsection