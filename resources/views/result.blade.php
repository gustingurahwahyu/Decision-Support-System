<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Hasil Rekomendasi Wisata</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-50 p-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-2xl shadow">
        <h1 class="text-2xl font-bold text-center mb-4">🏝️ Hasil Rekomendasi Wisata</h1>

        <p class="text-lg text-gray-700 mb-2">Halo <strong>{{ $nama }}</strong>! Berdasarkan preferensimu,
            rekomendasi tempat wisata terbaik untukmu adalah:</p>

        <div class="text-center bg-blue-100 py-4 rounded-lg text-2xl font-semibold">
            {{ $hasil }}
        </div>

        <div class="mt-4 text-sm text-gray-600">
            <p>💡 *Pengetahuan diakuisisi dari <strong>Ni Luh Putu Yuliani, S.Par., M.Par.</strong>, Dosen Pariwisata
                Universitas Udayana.*</p>
        </div>

        <div class="mt-6 text-center">
            <a href="/" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Coba Lagi</a>
        </div>
    </div>
</body>

</html>
