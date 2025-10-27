<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Hasil Rekomendasi Wisata</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            background-image: url('../images/{{ strtolower(str_replace(' / ', '-', str_replace(' ', '-', $hasil))) }}.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen bg-black/40 backdrop-blur-sm">
    <x-navbar />
    <div data-aos="zoom-in" class=" mx-auto">
        <div class="bg-white/95 backdrop-blur-md rounded-2xl w-full px-8 py-10 shadow-xl border border-gray-100">
            <h1
                class="text-3xl font-bold mb-8 text-center bg-gradient-to-r from-yellow-800 to-yellow-400 bg-clip-text text-transparent">
                Hasil Rekomendasi Wisata
            </h1>

            <div class="space-y-6">
                <p class="text-lg text-gray-700 mb-4 text-center">
                    Halo <strong class="text-yellow-800">{{ $nama }}</strong>!
                    <br>Berdasarkan preferensimu, rekomendasi tempat wisata terbaik untukmu adalah:
                </p>

                <div
                    class="text-center bg-gradient-to-r from-yellow-50 to-yellow-100 py-8 rounded-xl text-2xl font-semibold text-yellow-800 shadow-md mb-4 border border-yellow-200">
                    {{ $hasil }}
                </div>

                <div class="mt-4 text-sm text-gray-600 text-center">
                    <p>💡 <em>Pengetahuan diakuisisi dari <strong>Ni Luh Putu Yuliani, S.Par., M.Par.</strong>,
                            <br>Dosen Pariwisata Universitas Udayana.</em></p>
                </div>

                <div class="mt-8 text-center">
                    <a href="/form"
                        class="inline-block bg-gradient-to-r from-yellow-800 to-yellow-400 hover:from-yellow-200 hover:to-yellow-400 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition-all hover:shadow-xl">
                        Coba Lagi
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
