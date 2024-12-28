@extends('layout.nav')

@section('home')

<section id="history" class="pt-20">
    <div class="container mx-auto">
        <div class="flex flex-col px-10">
            <div class="flex flex-row justify-between">
                <div class="space-y-5 max-w-xl px-2">
                    <h1 class="font-semibold text-xl">History Pemesanan</h1>
                    <p class="text-[#191E25] font-normal text-base">Lihat Riwayat Pemesanan Tiket Anda dan Akses Semua Pertandingan yang Sudah Anda Pesan</p>
                </div>
            </div>
            <div class="flex flex-col py-10 space-y-5">
                @foreach ($pemesans as $pemesan )
                <div class="bg-[rgba(1,60,103,0.1)] flex justify-between items-center py-4 px-4 rounded-md">
                    <div class="space-y-1">
                        <h1 class="font-medium text-base">{{ $pemesan->nama }}</h1>
                        <p class="font-normal text-sm">{{ \Carbon\Carbon::parse($pemesan->tanggal->tanggal)->format('d F Y') }}</p>
                    </div>
                    <div class="flex flex-row space-x-5">
                        @if ($pemesan->status == 'sudah bayar')
                        <div class="w-[121px] h-[28px] bg-[#5DBD88] flex justify-center items-center text-[10px] font-medium text-white rounded-full">
                            <button>{{ $pemesan->status }}</button>
                        </div>
                        <!-- Tombol unduh tiket hanya muncul jika status 'sudah bayar' -->
                        <a href="{{ route('view-tiket', ['id' => $pemesan->id]) }}" target="_blank">
                            <div class="w-[121px] h-[28px] bg-[#5DBD71] flex justify-center items-center text-[10px] font-medium text-white rounded-full">
                                <button>Lihat Tiket</button>
                            </div>
                        </a>
                        @elseif ($pemesan->status == 'belum bayar')
                        <div class="w-[121px] h-[28px] bg-[#F87171] flex justify-center items-center text-[10px] font-medium text-white rounded-full">
                            <button>{{ $pemesan->status }}</button>
                        </div>
                        @endif
                        <a href="{{ route('detailpesanan', ['id' => $pemesan->id]) }}">
                            <img width="30" height="50" src="https://img.icons8.com/pastel-glyph/64/circled-right.png" alt="circled-right" />
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>




@endsection