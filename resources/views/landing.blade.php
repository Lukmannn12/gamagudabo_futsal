@extends('layout.nav')

@section('home')
<section id="landing" class="pt-36 pb-32">
    <div class="max-w-screen-xl mx-auto justify-center items-center py-7">
        <div class="flex xl:flex-row lg:flex-row md:flex-col sm:flex-col justify-center items-center ">
            <div class="flex flex-col justify-center lg:pr-14 md:px-7 sm:px-4">
                <h2 class="font-semibold text-[17px] text-[#013C67]">DUKUNG TIM FAVORITE MU, MENANGKAN MOMENT FUTSAL</h2>
                <h1 class="font-bold text-[26px] py-4">Semua di Gamagudabo Championship!</h1>
                <p class="font-extralight text-sm text-justify leading-6 pb-5">Gamagudabo adalah destinasi utama yang menyediakan segala kebutuhan para penggemar futsal, pemain, dan tim yang ingin merasakan pengalaman futsal yang seru, mendebarkan, dan tak terlupakan. Kami hadir dengan solusi lengkap untuk semua hal yang berhubungan dengan dunia futsal, mulai dari informasi jadwal pertandingan, pembelian tiket nonton futsal, hingga pendaftaran tim untuk berbagai turnamen futsal yang kami selenggarakan. Gamagudabo memudahkan Anda untuk tetap terhubung dengan dunia futsal di manapun dan kapanpun. Kami memberikan akses langsung ke berbagai informasi penting, seperti jadwal pertandingan yang selalu diperbarui dan pembelian tiket yang cepat dan aman.
                </p>
                <a href="/tiket">
                    <button class="bg-white border border-[#013C67] w-[282px] h-[46px] rounded-xl hover:bg-slate-100">
                        <span class="text-[#013C67] font-medium text[15px]">Pesan Tiket</span>
                    </button>
                </a>
                <div class="flex flex-row py-5 space-x-5">
                    <div class="bg-[#013C67] rounded-lg px-2 py-1 cursor-pointer">
                        <i class="fa-brands fa-instagram text-white fa-lg"></i>
                    </div>
                    <div class="bg-[#013C67] rounded-lg px-2 py-1 cursor-pointer">
                        <i class="fa-brands fa-youtube fa-instagram text-white fa-lg"></i>
                    </div>
                    <div class="bg-[#013C67] rounded-lg px-2 py-1 cursor-pointer">
                        <i class="fa-brands fa-tiktok text-white fa-lg"></i>
                    </div>
                </div>
            </div>
            <img src="{{ asset('image/logo2.png') }}" alt="logo2" class="w-[450px] h-[424px] mx-auto">
        </div>
    </div>
</section>

<!-- section 2 -->
<section id="about" class="bg-[#F8F8F8]">
    <div class="mx-auto container ">
        <div class="grid grid-cols-3">
            <img src="{{ asset('image/section2/image1.png') }}" alt="logo" class="w-[550px] h-[350px] mx-auto">
            <img src="{{ asset('image/section2/image2.png') }}" alt="logo" class="w-[550px] h-[350px] mx-auto">
            <img src="{{ asset('image/section2/image3.png') }}" alt="logo" class="w-[550px] h-[350px] mx-auto">
            <img src="{{ asset('image/section2/image4.png') }}" alt="logo" class="w-[550px] h-[350px] mx-auto">
            <img src="{{ asset('image/section2/image5.png') }}" alt="logo" class="w-[550px] h-[350px] mx-auto">
            <img src="{{ asset('image/section2/image6.png') }}" alt="logo" class="w-[550px] h-[350px] mx-auto">
        </div>
        <div class="py-10">
            <div class="max-w-6xl mx-auto flex justify-center items-center bg-white rounded-xl">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 px-4 space-x-14 py-6 lg:space-y-0 md:space-y-8 sm:space-y-14 ">
                    <div class="space-y-3 w-[361px] h-[63px]">
                        <h1 class="font-medium text-2xl">Great Deals For You</h1>
                        <p class="font-extralight text-sm">Tunggu Apa Lagi? Temukan Tiket Futsal dengan Harga Spesial dan Jadwal Pertandingan Terbaru. Pesan Sekarang dan Nikmati Permainan!</p>
                    </div>
                    <div class="relative flex flex-col w-[277px] h-[187px]">
                        <div class="absolute inset-0 bg-[#013C67] opacity-10 z-0"></div>
                        <div class="relative px-4 py-4 flex-col space-y-2">
                            <div class="flex items-center justify-center w-[60px] h-[60px] text-white text-3xl bg-[#013C67] rounded-full">
                                <i class="fa-solid fa-ticket fa-sm"></i>
                            </div>
                            <p class="text-black font-light text-xs text-justify pt-2">Beli tiket pertandingan futsal favorit Anda secara online kapan saja. Pilih pertandingan, tentukan tempat duduk, dan bayar dengan aman. </p>
                        </div>
                    </div>
                    <div class="relative flex flex-col w-[277px] h-[187px]">
                        <div class="absolute inset-0 bg-[#013C67] opacity-10 z-0"></div>
                        <div class="relative px-4 py-4 flex-col space-y-2">
                            <div class="flex items-center justify-center w-[60px] h-[60px] text-white text-3xl bg-[#FF543E] rounded-full">
                                <i class="fa-solid fa-calendar-days fa-sm"></i>
                            </div>
                            <p class="text-black font-light text-xs text-justify pt-2">Dapatkan informasi lengkap tentang waktu, lokasi, dan tim yang bertanding. Jangan lewatkan pertandingan seru dan selalu tahu jadwalnya dengan kami! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-32">
            <div class="max-w-7xl mx-auto justify-center items-center">
                <div class="text-center space-y-2">
                    <h1 class="text-[#013C67] font-semibold text-2xl">Jadwal Pertandingan</h1>
                    <p class="text-[#013C67] font-light text-sm lg:px-72 sm:px-5">Lihat Jadwal Lengkap Pertandingan Futsal, Temukan Pertandingan Favoritmu, dan Siapkan Dirimu untuk Menonton Aksi Seru di Lapangan!</p>
                </div>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6 py-20">
                    @foreach ($tanggals as $tanggal)
                    <div class="bg-white flex flex-col items-center justify-center p-6 rounded-lg shadow-lg">
                        <i class="fa-solid fa-calendar-days fa-2xl text-[#013C67] py-5"></i>
                        <h1 class="text-md font-bold text-gray-800 py-2">{{ $tanggal->hari }}</h1>
                        <h1 class="text-sm font-bold text-[#013C67]">{{ $tanggal->name }}</h1>
                        <p class="font-extralight text-sm py-2 text-black">{{ \Carbon\Carbon::parse($tanggal->tanggal)->format('d F Y') }}</p>
                        <p class="text-[#FF543E] font-bold text-sm pt-3">Harga : Rp {{ number_format($tanggal->harga, 2, ',', '.') }}</p>
                        <button
                            class="mt-4 px-10 py-2 bg-[#013C67] text-white rounded-full hover:bg-blue-700 transition pilih-tanggal"
                            data-tanggal-id="{{ $tanggal->id }}">
                            Pilih
                        </button>

                        <!-- Modal -->
                        <div id="modal" class="hidden fixed inset-0 z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <!-- Background backdrop -->
                            <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

                            <!-- Modal Content -->
                            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                    <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                        <div class="bg-white">
                                            <div class="modal">
                                                <div class="">
                                                    <h3 class="text-base font-semibold text-white bg-[#013C67] py-3 px-10" id="modal-title">Jadwal Pertandingan</h3>
                                                    <div class="modal-content gap-5 space-y-3 py-3 px-10">
                                                        <!-- Jadwals will be injected here -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                            <button type="button" id="closeModalBtn" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">
                                                Tutup
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
                <div class="flex justify-end">
                    <img src="{{ asset('image/logo2.png') }}" alt="logo" class="w-[60px] h-[56px]">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.pilih-tanggal');
    const modal = document.getElementById('modal');
    const modalContent = modal.querySelector('.modal-content');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const tanggalId = this.dataset.tanggalId;

            // Fetch jadwals by tanggal_id
            fetch(`/jadwals-by-tanggal?tanggal_id=${tanggalId}`)
                .then(response => response.json())
                .then(data => {
                    // Clear previous content
                    modalContent.innerHTML = '';

                    // Display date and day
                    if (data.tanggal && data.hari) {
                        modalContent.innerHTML += `
                            <h4 class="text-lg font-bold text-[#013C67]">${data.hari}, ${data.tanggal}</h4>
                            <hr class="my-2">
                        `;
                    }

                    // Populate modal with jadwals
                    if (data.jadwals && data.jadwals.length > 0) {
                        data.jadwals.forEach(jadwal => {
                            modalContent.innerHTML += `
                               <div class="mb-4 flex flex-row items-center justify-between">
                                    <p class="text-md font-medium">${jadwal.pertandingan}</p>
                                    <p class="text-sm font-light">${jadwal.waktu}</p>
                                </div>
                            `;
                        });
                    } else {
                        modalContent.innerHTML += `<p>Tidak ada jadwal tersedia.</p>`;
                    }

                    // Show modal
                    modal.classList.remove('hidden');
                })
                .catch(error => console.error('Error:', error));
        });
    });

    // Close modal logic
    document.getElementById('closeModalBtn').addEventListener('click', () => {
        modal.classList.add('hidden');
    });
});

</script>


@endsection