<div class="w-[80%] mx-auto">
    <div class="bg-white/95 backdrop-blur-md rounded-2xl w-full px-8 py-10 shadow-xl border border-gray-100">
        <h1
            class="text-3xl font-bold mb-8 text-center bg-gradient-to-r from-yellow-800 to-yellow-400 bg-clip-text text-transparent">
            Rekomendasi Wisata Bali
        </h1>

        <form action="{{ route('proses') }}" method="POST" class="space-y-6">
            @csrf

            <div class="w-full mb-6">
                <label class="block mb-2 font-bold text-gray-700">Nama Kamu</label>
                <input type="text" name="nama_pengguna"
                    class="w-full border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all bg-white/50 text-gray-800"
                    required>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Question 1 -->
                <div>
                    <label class="block mb-2 font-bold text-gray-700">Suka wisata alam atau budaya?</label>
                    <select name="preferensi_wisata"
                        class="w-full border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all bg-white/50 text-gray-800">
                        <option value="alam">Alam</option>
                        <option value="budaya">Budaya</option>
                    </select>
                </div>

                <!-- Question 2 -->
                <div>
                    <label class="block mb-2 font-bold text-gray-700">Suasana yang kamu suka?</label>
                    <select name="suasana"
                        class="w-full border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all bg-white/50 text-gray-800">
                        <option value="ramai">Ramai</option>
                        <option value="tenang">Tenang</option>
                    </select>
                </div>

                <!-- Question 3 -->
                <div>
                    <label class="block mb-2 font-bold text-gray-700">Suka aktivitas air?</label>
                    <select name="aktivitas_air"
                        class="w-full border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all bg-white/50 text-gray-800">
                        <option value="ya">Ya</option>
                        <option value="tidak">Tidak</option>
                    </select>
                </div>

                <!-- Question 4 -->
                <div>
                    <label class="block mb-2 font-bold text-gray-700">Ingin lokasi dekat pantai?</label>
                    <select name="dekat_pantai"
                        class="w-full border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all bg-white/50 text-gray-800">
                        <option value="ya">Ya</option>
                        <option value="tidak">Tidak</option>
                    </select>
                </div>

                <!-- Question 5 -->
                <div class="md:col-span-2">
                    <label class="block mb-2 font-bold text-gray-700">Tertarik dengan wisata kuliner khas?</label>
                    <select name="kuliner"
                        class="w-full border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all bg-white/50 text-gray-800">
                        <option value="ya">Ya</option>
                        <option value="tidak">Tidak</option>
                    </select>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-gradient-to-r from-yellow-800 to-yellow-400 hover:from-yellow-200 hover:to-yellow-400 text-white font-semibold py-3 px-6 rounded-xl shadow-lg transition-all hover:shadow-xl mt-8">
                Lihat Rekomendasi
            </button>
        </form>
    </div>
</div>
