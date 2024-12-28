@extends('layout.nav')

@section('home')

<section id="detail" class="pt-20">
    <div class="container mx-auto">
        <div class="flex lg:flex-row md:flex-col sm:flex-col space-x-10 lg:space-y-0 md:space-y-10 sm:space-y-10">
            <div class="max-w-md px-5 sm:mx-auto lg:mx-0 md:mx-auto">
                <h1 class="font-bold text-[32px] text-black">Detail Pemesanan Tiket</h1>
                <p class="py-3 font-light text-base leading-7 text-justify">Untuk menyelesaikan pemesanan, silakan unggah bukti pembayaran Anda di sini. Pastikan file yang diunggah jelas dan sesuai format yang ditentukan.</p>
                <div class="flex flex-col py-5 px-6">
                    <h1 class="font-medium text-xs">Pembayaran Via</h1>
                    <img src="{{ asset('image/bank.png') }}" alt="bank" class="w-28 h-20">
                    <h1 class="font-medium text-xs py-2">Nomor Rekening</h1>
                    <div class="bg-[#D9D9D9] w-full h-[31px] flex items-center px-2 rounded-lg">
                        <p class="text-[#013C67] font-medium text-xs">1330018508853</p>
                    </div>
                    <h1 class="font-medium text-xs py-2">Atas Nama</h1>
                    <p class="text-[#013C67] font-medium text-xs">THIRAFI ZHAHRAN KURN</p>
                    <h1 class="font-medium text-xs py-2">Batas waktu pembayaran sampai</h1>
                    <p class="text-[#FF0F13] font-medium text-xs">1x24 jam dari anda melakukan pemesanan!</p>
                </div>
            </div>
            <div class="lg:w-[712px] h-[726px] sm:w-[550px] md:w-[712px] px-5">
                    <h1 class=" font-semibold text-base py-4 px-5 ">Pembayaran</h1>
                    <div class="border-b border-gray-300"></div>
                    <div class="flex flex-col pt-5 px-5">
                    <input type="hidden" name="pemesanan_id" value="{{ $pemesans->id }}">
                        <div class="flex flex-col space-y-5 rounded-lg">
                                <div>
                                    <label for="nama" class="block text-sm font-medium mb-2">Nama</label>
                                    <p class=" w-full px-4 py-2 border text-xs border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        {{ $pemesans->nama }}
                                    </p>
                                        
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium mb-2">Email</label>
                                    <p class=" w-full px-4 py-2 border text-xs border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        {{ $pemesans->email }}
                                    </p>
                                </div>
                                <div>
                                    <label for="handphone" class="block text-sm font-medium mb-2">No Handphone</label>
                                    <p class=" w-full px-4 py-2 border text-xs border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        {{ $pemesans->no_hp }}
                                    </p>
                                </div>
                                <div>
                                    <label for="handphone" class="block text-sm font-medium mb-2">Jumlah Tiket</label>
                                    <p class=" w-full px-4 py-2 border text-xs border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        {{ $pemesans->jumlah_tiket }}
                                    </p>
                                </div>
                                <div>
                                    <label for="handphone" class="block text-sm font-medium mb-2">Tanggal Pertandingan</label>
                                    <p class=" w-full px-4 py-2 border text-xs border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    {{  \Carbon\Carbon::parse($pemesans->tanggal->tanggal)->format('d F Y')}}
                                    </p>
                                </div>
                                <div>
                                    <label for="handphone" class="block text-sm font-medium mb-2">Total Bayar</label>
                                    <p class=" w-full px-4 py-2 border text-xs text-[#FF0F13] border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        Rp {{ number_format($pemesans->total, 2, ',', '.') }}
                                    </p>
                                </div>
                        </div>
                        <div class="my-10 w-[434px] h-[49px] bg-[#013C67] rounded-2xl text-white items-center justify-center flex">
                        <button id="whatsappButton">Upload Bukti via WhatsApp</button>
                        </div>
                    </div>
            </div>
        </div>
        <div class="flex justify-end">
                    <img src="{{ asset('image/logo2.png') }}" alt="logo" class="w-[60px] h-[56px]">
        </div>
    </div>
</section>

<script>
    document.getElementById('whatsappButton').addEventListener('click', function() {
        const phone = '+6281288022035'; // Nomor WhatsApp
        const message = 'Halo, saya ingin mengupload bukti bayar.';
        const url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
        window.open(url, '_blank'); // Membuka tautan di tab baru
    });
</script>

@endsection