<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>DSS Rekomendasi Wisata Bali</title>
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

        .form-label {
            color: #6366f1;
            font-weight: 600;
        }

        .form-input,
        .form-select {
            transition: box-shadow 0.2s, border-color 0.2s;
        }

        .form-input:focus,
        .form-select:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 2px #6366f1;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen">
    <div class="glass max-w-2xl w-full mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-purple-700 drop-shadow">💡 DSS Rekomendasi Wisata Bali
        </h1>
        <form action="{{ route('proses') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="form-label block mb-1">Nama Kamu:</label>
                <input type="text" name="nama_pengguna"
                    class="form-input w-full border-2 border-purple-200 rounded-lg p-3 focus:outline-none" required>
            </div>

            <div>
                <label class="form-label block mb-1">1. Suka wisata alam atau budaya?</label>
                <select name="preferensi_wisata"
                    class="form-select w-full border-2 border-purple-200 rounded-lg p-3 focus:outline-none">
                    <option value="alam">Alam</option>
                    <option value="budaya">Budaya</option>
                </select>
            </div>

            <div>
                <label class="form-label block mb-1">2. Suasana yang kamu suka?</label>
                <select name="suasana"
                    class="form-select w-full border-2 border-purple-200 rounded-lg p-3 focus:outline-none">
                    <option value="ramai">Ramai</option>
                    <option value="tenang">Tenang</option>
                </select>
            </div>

            <div>
                <label class="form-label block mb-1">3. Suka aktivitas air?</label>
                <select name="aktivitas_air"
                    class="form-select w-full border-2 border-purple-200 rounded-lg p-3 focus:outline-none">
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>

            <div>
                <label class="form-label block mb-1">4. Ingin lokasi dekat pantai?</label>
                <select name="dekat_pantai"
                    class="form-select w-full border-2 border-purple-200 rounded-lg p-3 focus:outline-none">
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>

            <div>
                <label class="form-label block mb-1">5. Tertarik dengan wisata kuliner khas?</label>
                <select name="kuliner"
                    class="form-select w-full border-2 border-purple-200 rounded-lg p-3 focus:outline-none">
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-purple-500 to-blue-400 text-white font-semibold py-3 rounded-lg shadow-lg hover:from-purple-600 hover:to-blue-500 transition">
                Lihat Rekomendasi
            </button>
        </form>
    </div>
</body>

</html>
