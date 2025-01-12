<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Masjid</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Irish+Grover&family=Itim&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=M+PLUS+Code+Latin:wght@100..700&family=Mochiy+Pop+One&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playwrite+AR:wght@100..400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rosario:ital,wght@0,700;1,700&family=Seymour+One&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/landingpage.css')}}">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->

    <body class="bg-blue-500 ">
        <nav class="relative px-4 py-4 flex justify-between items-center bg-white lg:sticky lg:top-0 z-50 shadow-md">
            <a class="text-3xl font-bold leading-none text-blue-600" href="#">Al-Kautsar</a>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center text-blue-600 p-3">
                    <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">

                <li><a class="text-sm text-blue-600 hover:text-gray-500" href="#">Home</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm text-blue-600 hover:text-blue-800" href="#">About Us</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm text-blue-600 hover:text-gray-500" href="#">Services</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>

                <li><a class="text-sm text-blue-600 hover:text-gray-500" href="#">Contact</a></li>
            </ul>

        </nav>
        <div class="navbar-menu relative z-50 hidden">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                <div class="flex items-center mb-8">

                    <button class="navbar-close">
                        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <a class="text-3xl font-bold text-blue-600 leading-none" href="#">Al-Kautsar</a>
                </div>
                <div>
                    <ul>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Home</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">About Us</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Services</a>
                        </li>

                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="mt-auto">
                    <p class="my-4 text-xs text-center text-gray-400">
                        <span>Copyright © 2024</span>
                    </p>
                </div>
            </nav>
        </div>
    </body>


    <!-- hero section -->

    <section id="home" class="relative bg-cover bg-center min-h-screen flex items-center justify-center pt-16 md:pt-20">
        <!-- Background -->
        <div class="absolute inset-0 px-4 sm:px-10 md:px-20 pb-16 sm:pb-20 md:pb-28 pt-4 sm:pt-5 rounded-lg bg-gradient-to-r from-blue-50 via-purple-50 to-blue-50">
            <div class="h-full w-full bg-cover bg-center rounded-lg"
                style="background-image: url('{{ asset('assets/images/masjid2.png') }}');">
            </div>
        </div>

        <!-- Konten -->
        <div class="relative z-10 text-white p-6 w-full max-w-4xl">
            @foreach ($Hero as $hero)
            <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-4 -mt-10 text-center" style="font-family: 'M PLUS Code Latin', sans-serif;">
                {{ $hero->judul }}
            </h1>
            <p class="mt-4 text-sm sm:text-base md:text-lg text-center leading-relaxed font-mono">
                {{ $hero->isi }}
            </p>
            @endforeach

            <!-- Tombol Donasi -->
            <div class="text-center mt-6">
                <a href="#donasi"
                    class="px-5 py-3 bg-white text-blue-600 font-semibold rounded-lg shadow-lg hover:bg-blue-600 hover:text-white transition duration-300">
                    Donasi Sekarang
                </a>
            </div>

            <div class="flex items-center justify-center mt-10 h-30 w-full">
                <div class="text-center">

                    <p id="ayah-text" class="text-3xl font-bold text-black mb-4"></p>

                    <p id="ayah-translation" class="text-lg italic text-black mb-2"></p>

                    <p id="ayah-info" class="text-sm text-black font-medium"></p>
                </div>
            </div>

            <!-- Waktu Salat -->
            <div id="waktuShalat" class="waktu-shalat grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 mt-10 md:mt-20"></div>

        </div>
    </section>
    <!-- akhir hero section -->

    <!-- countdown 1 ramadhan -->

    <div id="countdown" class="mt-8 text-center text-blue-600 bg-gradient-to-r bg-white p-2 rounded-lg shadow-lg">
        <h2 class="text-2xl md:text-3xl font-bold">MENUJU RAMADHAN</h2>
        <div class="flex justify-center space-x-4 mt-4">
            <div class="text-center">
                <span id="days" class="block text-4xl md:text-2xl font-bold"></span>
                <span class="text-sm md:text-lg">Days</span>
            </div>
            <div class="text-center">
                <span id="hours" class="block text-4xl md:text-2xl font-bold"></span>
                <span class="text-sm md:text-lg">Hours</span>
            </div>
            <div class="text-center">
                <span id="minutes" class="block text-4xl md:text-2xl font-bold"></span>
                <span class="text-sm md:text-lg">Minutes</span>
            </div>
            <div class="text-center">
                <span id="seconds" class="block text-4xl md:text-2xl font-bold"></span>
                <span class="text-sm md:text-lg">Seconds</span>
            </div>
        </div>
    </div>


    <!-- Slider Donasi -->
    <section id="donasi" class="py-16 bg-white"
        style="background-image: url('assets/images/ramadhan-removebg-preview.png'); 
                background-size: contain;
                background-repeat: no-repeat; 
                background-position: right ;">
        <div class="container mx-auto">
            <h2 class="text-4xl font-extrabold mb-4 text-transparent text-center bg-clip-text bg-gradient-to-r from-purple-500 to-blue-500 h-20">Program Donasi</h2>

            <div class="flex overflow-x-auto space-x-4 p-8  ">
                @foreach ($donasis as $donasi)
                <div class="bg-gradient-to-r from-blue-500 to-purple-500 p-6 rounded-lg shadow-2xl w-72 flex-shrink-0 transform hover:scale-105 transition duration-300">
                    <!-- Gambar -->
                    <div class="relative">
                        <img class="w-full h-40 object-cover rounded-lg shadow-lg" src="{{$donasi->path}}" alt="Image">
                        <div class="absolute inset-0 bg-black bg-opacity-20 rounded-lg"></div>
                    </div>
                    <!-- Judul -->
                    <h3 class="font-bold text-white text-lg mt-4 mb-2 truncate">
                        {{ $donasi->judul }}
                    </h3>
                    <!-- Isi -->
                    <p class="text-sm text-gray-100 mb-4 line-clamp-3">
                        {{ $donasi->isi }}
                    </p>
                    <!-- Tombol -->
                    <button class="donateButton px-5 py-3 bg-white text-blue-600 font-semibold rounded-lg shadow-lg hover:bg-blue-600 hover:text-white transition duration-300"
                        data-id="{{ $donasi->id }}"
                        data-judul="{{ $donasi->judul }}"
                        data-isi="{{ $donasi->isi }}"
                        data-path="{{ $donasi->path }}">
                        Donasi
                    </button>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Informasi Keislaman dan Berita/Acara -->
    <section id="informasi" class="py-16 bg-gradient-to-r from-blue-50 to-blue-100 rounded-3xl">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Kolom Informasi Keislaman -->
                <div>
                    <h2 class="text-4xl font-extrabold text-blue-700 mb-8 text-center lg:text-left">
                        Informasi Keislaman
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        @foreach ($contents as $content)
                        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <h3 class="font-bold text-xl text-blue-600 mb-3">
                                {{ $content->judul }}
                            </h3>
                            <p class="text-gray-700 leading-relaxed">
                                {{ $content->isi }}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Kolom Berita/Acara dengan Slider -->
                <div class="space-y-8">
                    <h2 class="text-4xl font-extrabold text-blue-700 mb-8 text-center lg:text-left">
                        Berita & Acara
                    </h2>
                    <div class="swiper-container relative overflow-hidden w-full max-w-full">
                        <div class="swiper-wrapper">
                            @foreach ($events as $event)

                            <div class="swiper-slide bg-white rounded-xl shadow-lg overflow-hidden max-w-full">
                                <img src="{{ asset('storage/' . $event->path) }}" alt="{{ $event->judul }}" class="w-full h-full object-cover">
                            </div>
                            @endforeach
                        </div>

                        <!-- Navigasi Slider -->
                        <div class="swiper-button-next absolute top-1/2 right-0 transform -translate-y-1/2 z-10"></div>
                        <div class="swiper-button-prev absolute top-1/2 left-0 transform -translate-y-1/2 z-10"></div>

                        <!-- Pagination -->
                        <div class="swiper-pagination absolute bottom-0 w-full z-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Masjid -->
    <section id="tentang" class="py-16 bg-gradient-to-r from-blue-50 via-purple-50 to-blue-50">
        @foreach ($tentangs as $tentang)
        <div class="container mx-auto px-6 md:px-16 text-center mb-12">
            <h2 class="text-4xl font-extrabold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-blue-500 h-20">
                {{ $tentang->judul }}
            </h2>
            <p class="text-lg leading-relaxed text-gray-700 max-w-3xl mx-auto">
                {{ $tentang->isi }}
            </p>

        </div>
        @endforeach
    </section>


    <!-- Pop-Up Modal -->
    <div id="donationModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center hidden z-20">
        <div class="bg-gradient-to-br from-white via-gray-50 to-blue-50 w-96 max-h-[70vh] overflow-y-auto rounded-xl shadow-2xl p-6 relative">
            <!-- Close Button -->
            <button id="closeButton" class="sticky top-0 bg-white text-gray-500 hover:text-red-500 text-2xl p-2 rounded-full shadow-md z-10">&times;</button>

            <!-- Content -->
            <div class="text-center mt-3">
                <img src="{{ $donasi->path }}" alt="Donation" class="w-32 h-32 object-cover mx-auto mb-4 rounded-full border-4 border-blue-400 shadow-md">
                <h2 class="text-2xl font-extrabold text-blue-600 mb-2">
                    Terima kasih telah mendonasikan ke {{ $donasi->judul }}
                </h2>
                <p class="text-gray-700 mb-6">{{ $donasi->isi }}</p>

                <!-- Dropdown Metode Pembayaran -->
                <select id="paymentMethod" onchange="getPaymentMethod(this.value)" class="w-full border border-blue-300 rounded-lg p-2 mb-4 bg-blue-50 text-gray-800">
                    <option value="" class="text-gray-400">Pilih Metode</option>
                    <option value="bank">Transfer ATM</option>
                    <option value="emoney">Pilih e-money</option>
                    <option value="qris">QRIS</option>
                </select>

                <!-- Dropdown Bank (Hanya untuk Transfer ATM) -->
                <div id="bankDropdown" class="hidden fade-in">
                    <select id="bankListNames" class="w-full border border-gray-300 rounded-lg p-2 mb-4 bg-gray-50 text-gray-800">
                        <option value="" id="pilih_bank" class="text-gray-400">Pilih Bank</option>
                    </select>
                </div>

                <!-- Dropdown e-Money -->
                <div id="emoneyDropdown" class="hidden fade-in">
                    <select id="emoneyListNames" class="w-full border border-gray-300 rounded-lg p-2 mb-4 bg-gray-50 text-gray-800">
                        <option value="" id="pilih_emoney" class="text-gray-400">Pilih e-Money</option>
                    </select>
                </div>

                <!-- Payment Info -->
                <div id="paymentInfo" class="text-left hidden fade-in">
                    <p class="text-sm text-gray-600">Nomor Rekening/VA:</p>
                    <div class="flex items-center mt-1">
                        <span id="paymentDetails" class="font-mono text-lg font-semibold text-gray-800"></span>
                        <button type="button" class="ml-2 text-blue-600 hover:text-blue-800" onclick="copyContent()">Copy</button>
                    </div>
                    <p id="ownerName" class="text-sm text-gray-600 mt-2">A/N: <span class="font-semibold text-gray-800"></span></p>
                </div>

                <!-- QRIS -->
                <div id="qrisInfo" class="hidden fade-in mt-6">
                    <p class="text-sm text-gray-600 mb-2">Scan QRIS:</p>
                    <img src="{{ asset('storage/' . $donasi->qris_path) }}" alt="QRIS" class="w-40 h-40 mx-auto rounded-lg shadow-lg">

                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <footer class="bg-gradient-to-r from-blue-600 to-green-500 text-white py-8 rounded-t-lg">
        @foreach($kontaks as $kontak)
        <div class="container mx-auto text-center space-y-4">
            <!-- Nama Masjid -->
            <div class="flex justify-center items-center">
                <h2 class="text-2xl font-bold tracking-wider">Masjid Al-Kautsar</h2>
            </div>

            <!-- Informasi Hak Cipta -->
            <p class="text-lg">&copy;{{ $kontak->tahun }} Masjid Al-Kautsar. Semua Hak Dilindungi.</p>
            <p class="text-base">Kontak:
                <span class="">{{ $kontak->email }}</span> |
                <span class="font-semibold">{{ $kontak->no_telpon }}</span>
            </p>

            <!-- Lokasi Masjid -->
            <div class="bg-white text-black rounded-lg p-4 shadow-lg inline-block">
                <div class="flex flex-col items-center space-y-3">

                    <!-- Teks Lokasi -->
                    <div>
                        <h3 class="text-lg font-semibold text-center">Lokasi Masjid</h3>
                        <p class="text-sm text-gray-700 text-center">Jl. Karawitan No.86, Kota Bandung, Jawa Barat </p>
                    </div>
                    <!-- Tombol Lokasi -->
                    <a href="https://goo.gl/maps/example" target="_blank" class="bg-gradient-to-r from-blue-600 to-green-500 hover:from-green-500 hover:to-blue-600 text-white px-6 py-2 rounded-lg shadow-md font-medium transition">
                        Lihat di Google Maps
                    </a>
                </div>
            </div>

        </div>
        @endforeach
    </footer>

    <script>
        //slider berita atau acara

        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 5000,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                slidesPerView: 1,
                spaceBetween: 20,
            });
        });

        //akhir slider berita atau acara


        // hadist dan ayat quran

        async function fetchShortAyah() {
            let ayah = null;

            while (!ayah) {
                // Memilih surah acak
                const randomSurah = Math.floor(Math.random() * 114) + 1;
                const response = await fetch(`https://equran.id/api/surat/${randomSurah}`);
                const data = await response.json();


                const shortAyat = data.ayat.filter((a) => a.ar.length <= 50);

                if (shortAyat.length > 0) {
                    // Pilih ayat pendek secara acak
                    const randomIndex = Math.floor(Math.random() * shortAyat.length);
                    const selectedAyah = shortAyat[randomIndex];

                    ayah = {
                        text: selectedAyah.ar,
                        translation: selectedAyah.idn,
                        surah: data.nama,
                        number: selectedAyah.nomor,
                        surahNumber: data.nomor,
                    };
                }
            }

            return ayah;
        }

        async function displayShortAyah() {
            const ayahText = document.getElementById("ayah-text");
            const ayahTranslation = document.getElementById("ayah-translation");
            const ayahInfo = document.getElementById("ayah-info");

            // Ambil ayat pendek utuh
            const ayah = await fetchShortAyah();

            // Tampilkan ayat ke elemen HTML
            ayahText.innerText = ayah.text; // Ayat Arab
            ayahTranslation.innerText = `“${ayah.translation}”`; // Terjemahan
            ayahInfo.innerText = `QS. ${ayah.surahNumber} (${ayah.surah}):${ayah.number}`; // Informasi surat dan ayat
        }

        displayShortAyah();
        // akhir hadist dan ayat quran



        // script countdown ramadhan


        const ramadhanStartDate = new Date('2025-02-28T00:00:00');

        function updateCountdown() {
            const now = new Date();
            const timeLeft = ramadhanStartDate - now;

            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
            const minutes = Math.floor((timeLeft / (1000 * 60)) % 60);
            const seconds = Math.floor((timeLeft / 1000) % 60);

            document.getElementById('days').textContent = days;
            document.getElementById('hours').textContent = hours;
            document.getElementById('minutes').textContent = minutes;
            document.getElementById('seconds').textContent = seconds;
        }

        // Perbarui countdown setiap detik
        setInterval(updateCountdown, 1000);

        // akhir script countdown ramadhan



        const API_URL = "https://api.aladhan.com/v1/timingsByCity?city=Bandung&country=Indonesia&method=2";
        const waktuShalatContainer = document.getElementById("waktuShalat");

        const colors = {
            Fajr: "bg-white text-blue-800",
            Dhuhr: "bg-white text-green-800",
            Asr: "bg-white text-yellow-800",
            Maghrib: "bg-white text-orange-800",
            Isha: "bg-white text-purple-800"
        };

        const icons = {
            Fajr: "<i class='bi bi-sunrise'></i>",
            Dhuhr: "<i class='fas fa-sun'></i>",
            Asr: "<i class='fas fa-cloud-sun'></i>",
            Maghrib: "<i class='bi bi-sunset'></i>",
            Isha: "<i class='fas fa-moon'></i>"
        };
        // Fetch and display prayer times
        fetch(API_URL)
            .then(response => response.json())
            .then(data => {
                const timings = data.data.timings;
                for (const [waktu, jam] of Object.entries(timings)) {
                    if (colors[waktu]) {
                        const card = document.createElement("div");
                        card.className = `waktu flex items-center gap-4 p-4 rounded-lg shadow-lg ${colors[waktu]}`;
                        card.innerHTML = `
                    <div class="icon text-3xl">${icons[waktu]}</div>
                    <div>
                        <h2 class="text-xl font-bold">${waktu}</h2>
                        <p class="text-2xl">${jam}</p>
                    </div>
                `;
                        waktuShalatContainer.appendChild(card);
                    }
                }
            })
            .catch(error => {
                console.error("Error fetching prayer times:", error);
            });




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
        document.addEventListener('DOMContentLoaded', function() {
            const bankDropdown = document.getElementById('bankDropdown');
            const bankListNames = document.getElementById('bankListNames');
            const emoneyListNames = document.getElementById('emoneyListNames');
            const emoneyDropdown = document.getElementById('emoneyDropdown');
            const qrisDropdown = document.getElementById('qrisDropdown');
            const qrisListNames = document.getElementById('qrisListNames');
            const bankListAccounts = document.getElementById('bankListAccounts');
            const donateButtons = document.querySelectorAll('.donateButton');
            const donationModal = document.getElementById('donationModal');
            const closeButton = document.getElementById('closeButton');
            const paymentMethod = document.getElementById('paymentMethod');
            const paymentInfo = document.getElementById('paymentInfo');
            const qrisInfo = document.getElementById('qrisInfo');
            const paymentDetails = document.getElementById('paymentDetails');


            let currentDonasi = null;

            // Buka modal saat tombol "Donasi" ditekan
            donateButtons.forEach(button => {
                button.addEventListener('click', function() {
                    donasi_id = this.dataset.id
                    currentDonasi = {

                        judul: this.dataset.judul,
                        isi: this.dataset.isi,
                        path: this.dataset.path
                    };

                    // Isi konten modal dengan data dari tombol
                    document.querySelector('#donationModal h2').innerText = `Terima kasih karena telah mendonasikan ke ${currentDonasi.judul}`;
                    document.querySelector('#donationModal p').innerText = currentDonasi.isi;
                    document.querySelector('#donationModal img').src = currentDonasi.path;

                    // Tampilkan modal
                    donationModal.classList.remove('hidden');
                });
            });

            // Tutup modal
            closeButton.addEventListener('click', () => {
                donationModal.classList.add('hidden');
            });

            // Update Payment Info


            function getPaymentMethod(method) {
                const data = [];
                $.ajax({
                    type: 'GET',
                    url: "{{ route('select-payment-method') }}",
                    data: {
                        id: donasi_id
                    },
                    dataType: "json",
                    success: function(response) {
                        const data = response;

                        if (method === 'bank') {
                            emoneyDropdown.classList.add('hidden');
                            bankDropdown.classList.remove('hidden');
                            let bankOptions = '<option value="" id="pilih_bank">Pilih Bank</option>';
                            if (data.nama_atm_1 && data.no_rek_1) {
                                bankOptions += '<option value="' + data.no_rek_1 + '" data-owner="' + data.atas_nama_1 + '">' + data.nama_atm_1 + '</option>';
                            }
                            if (data.nama_atm_2 && data.no_rek_2) {
                                bankOptions += '<option value="' + data.no_rek_2 + '" data-owner="' + data.atas_nama_2 + '">' + data.nama_atm_2 + '</option>';
                            }
                            if (data.nama_atm_3 && data.no_rek_3) {
                                bankOptions += '<option value="' + data.no_rek_3 + '" data-owner="' + data.atas_nama_3 + '">' + data.nama_atm_3 + '</option>';
                            }
                            $('#bankListNames').html(bankOptions);


                            $('#bankListNames').change(() => {
                                const selectedOption = $('#bankListNames').find(":selected");
                                const selectedValue = selectedOption.val();
                                const selectedOwner = selectedOption.data('owner');
                                if (selectedValue) {
                                    paymentInfo.classList.remove('hidden');
                                    paymentDetails.textContent = $('#bankListNames').find(":selected").val();
                                    document.querySelector('#ownerName span').textContent = selectedOwner || '';
                                }
                            })
                        }

                        if (method === 'emoney') {

                            emoneyDropdown.classList.remove('hidden');
                            bankDropdown.classList.add('hidden');
                            let emoneyOptions = '<option value="" id="pilih_emoney">Pilih emoney</option>';
                            if (data.emoney_1 && data.nomer_va_1) {
                                emoneyOptions += '<option value="' + data.nomer_va_1 + '" data-owner="' + data.atas_nama_4 + '">' + data.emoney_1 + '</option>';
                            }
                            if (data.emoney_2 && data.nomer_va_2) {
                                emoneyOptions += '<option value="' + data.nomer_va_2 + '" data-owner="' + data.atas_nama_5 + '">' + data.emoney_2 + '</option>';
                            }
                            if (data.emoney_3 && data.nomer_va_3) {
                                emoneyOptions += '<option value="' + data.nomer_va_3 + '" data-owner="' + data.atas_nama_6 + '">' + data.emoney_3 + '</option>';
                            }
                            $('#emoneyListNames').html(emoneyOptions);

                            $('#emoneyListNames').change(() => {
                                const selectedOption = $('#emoneyListNames').find(":selected");
                                const selectedValue = selectedOption.val();
                                const selectedOwner = selectedOption.data('owner');
                                if (selectedValue) {
                                    paymentInfo.classList.remove('hidden');
                                    paymentDetails.textContent = $('#emoneyListNames').find(":selected").val();
                                    document.querySelector('#ownerName span').textContent = selectedOwner || '';
                                }
                            })

                        }

                        if (method === 'qris') {

                            bankDropdown.classList.add('hidden');
                            emoneyDropdown.classList.add('hidden');
                            qrisInfo.classList.remove('hidden');
                            document.querySelector('#qrisInfo img').src = response.qris_path;

                            // $('#qrisListNames').change(() => {
                            //     qrisInfo.classList.remove('hidden');
                            //     document.querySelector('#qrisInfo img').src = $('#qrisListNames').find(":selected").val();
                            // });

                        }
                    },
                });
                return data;
            }

            function resetPaymentSections() {
                bankDropdown.classList.add('hidden');
                paymentInfo.classList.add('hidden');
                qrisInfo.classList.add('hidden');
                paymentDetails.textContent = '';
            }

            paymentMethod.addEventListener('change', (e) => {
                const method = e.target.value;
                resetPaymentSections();

                const data = getPaymentMethod(method);

            });


            window.copyContent = function() {
                const textToCopy = paymentDetails.textContent;
                if (textToCopy) {
                    navigator.clipboard.writeText(textToCopy)
                        .then(() => alert('Nomor rekening berhasil disalin!'))
                        .catch(err => console.error('Gagal menyalin teks:', err));
                }
            };
        });
    </script>


</body>

</html>