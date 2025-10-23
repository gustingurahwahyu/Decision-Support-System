<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Hasil Rekomendasi Wisata</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            min-height: 100vh;
        }

        .glass {
            background: rgba(255, 255, 255, 0.85);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.18);
            backdrop-filter: blur(6px);
            border-radius: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen">
    <div class="glass max-w-xl w-full mx-auto p-8">
        <h1 class="text-3xl font-bold text-center mb-6 text-purple-700 drop-shadow">🏝️ Hasil Rekomendasi Wisata
        </h1>

        <p class="text-lg text-gray-700 mb-4 text-center">Halo <strong>{{ $nama }}</strong>! Berdasarkan
            preferensimu,<br>
            rekomendasi tempat wisata terbaik untukmu adalah:</p>

        <div class="text-center bg-blue-100 py-6 rounded-xl text-2xl font-semibold text-purple-700 shadow mb-4">
            {{ $hasil }}
        </div>

        <div class="mt-2 text-sm text-gray-600 text-center">
            <p>💡 <em>Pengetahuan diakuisisi dari <strong>Ni Luh Putu Yuliani, S.Par., M.Par.</strong>, Dosen Pariwisata
                    Universitas Udayana.</em></p>
        </div>

        <div class="mt-6 text-center">
            <a href="/"
                class="bg-gradient-to-r from-purple-500 to-blue-400 text-white font-semibold px-6 py-2 rounded-lg shadow-lg hover:from-purple-600 hover:to-blue-500 transition">
                Coba Lagi
            </a>
        </div>
    </div>
</body>

</html>
