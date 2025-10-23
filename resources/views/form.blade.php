<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>DSS Rekomendasi Wisata Bali</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 p-8">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-2xl shadow">
        <h1 class="text-2xl font-bold mb-4 text-center">💡 DSS Rekomendasi Wisata Bali</h1>
        <form action="{{ route('proses') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium">Nama Kamu:</label>
                <input type="text" name="nama_pengguna" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">1. Suka wisata alam atau budaya?</label>
                <select name="preferensi_wisata" class="w-full border rounded p-2">
                    <option value="alam">Alam</option>
                    <option value="budaya">Budaya</option>
                </select>
            </div>

            <div>
                <label class="block font-medium">2. Suasana yang kamu suka?</label>
                <select name="suasana" class="w-full border rounded p-2">
                    <option value="ramai">Ramai</option>
                    <option value="tenang">Tenang</option>
                </select>
            </div>

            <div>
                <label class="block font-medium">3. Suka aktivitas air?</label>
                <select name="aktivitas_air" class="w-full border rounded p-2">
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>

            <div>
                <label class="block font-medium">4. Ingin lokasi dekat pantai?</label>
                <select name="dekat_pantai" class="w-full border rounded p-2">
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>

            <div>
                <label class="block font-medium">5. Tertarik dengan wisata kuliner khas?</label>
                <select name="kuliner" class="w-full border rounded p-2">
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Lihat
                Rekomendasi</button>
        </form>
    </div>
</body>

</html>
