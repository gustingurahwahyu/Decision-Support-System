<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Rekomendasi Wisata Bali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <x-navbar />
    <x-hero />

    <!-- Stats -->
    <div class="absolute left-1/2 -bottom-16 transform -translate-x-1/2 flex gap-6">
        <div class="bg-white rounded-xl shadow-lg px-6 py-4 text-center">
            <div class="text-2xl font-bold text-yellow-600">100+</div>
            <div class="text-gray-700 text-sm">Destinasi Wisata</div>
        </div>
        <div class="bg-white rounded-xl shadow-lg px-6 py-4 text-center">
            <div class="text-2xl font-bold text-yellow-600">10+</div>
            <div class="text-gray-700 text-sm">Kriteria Penilaian</div>
        </div>
        <div class="bg-white rounded-xl shadow-lg px-6 py-4 text-center">
            <div class="text-2xl font-bold text-yellow-600">Sistem Pakar</div>
            <div class="text-gray-700 text-sm">Berbasis Pengetahuan</div>
        </div>
        <div class="bg-white rounded-xl shadow-lg px-6 py-4 text-center">
            <div class="text-2xl font-bold text-yellow-600">Cepat</div>
            <div class="text-gray-700 text-sm">Hasil Akurat</div>
        </div>
    </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="max-w-7xl mx-auto mt-32 px-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Tentang Sistem</h2>
                <span class="text-lg font-semibold text-yellow-600">Rekomendasi Wisata Bali</span>
            </div>
            <p class="max-w-xl text-gray-700 mt-4 md:mt-0">
                Sistem ini membantu kamu menemukan rekomendasi tempat wisata di Bali berdasarkan preferensi seperti
                jenis wisata, suasana, aktivitas, lokasi, dan kuliner. Sistem pakar ini menggunakan pengetahuan dari
                ahli pariwisata untuk memberikan saran destinasi yang paling sesuai dengan keinginanmu.
            </p>
        </div>
        <!-- Gallery Grid -->
        <div id="gallery" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <img src="../images/kintamani.jpg" alt="kintamani Bali" class="rounded-xl object-cover w-full h-56 shadow">
            <img src="../images/nusa-penida.jpg" alt="nusa penida Bali"
                class="rounded-xl object-cover w-full h-56 shadow">
            <img src="../images/kuta.jpg" alt="kuta Bali" class="rounded-xl object-cover w-full h-56 shadow">
            <img src="../images/ubud.jpg" alt="ubud Bali" class="rounded-xl object-cover w-full h-56 shadow">
        </div>
    </section>

    <x-footer />
</body>

</html>
