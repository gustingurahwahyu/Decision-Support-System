<nav class="fixed top-0 left-0 w-full z-20 bg-white shadow-md transition">
    <div class="max-w-7xl mx-auto px-8 py-4 flex items-center justify-between">
        <a href="/" class="flex items-center space-x-2">
            <span class="text-xl font-bold text-gray-800 tracking-tight">Rekomendasi <span class="text-yellow-600">Wisata
                    Bali</span></span>
        </a>
        <ul class="flex space-x-10 font-semibold text-gray-700 text-md">
            <li>
                <a href="/"
                    class="hover:text-yellow-600 transition {{ request()->is('/') ? 'text-yellow-600' : '' }}">
                    Beranda
                </a>
            </li>
            <li>
                <a href="/form"
                    class="hover:text-yellow-600 transition {{ request()->is('form') ? 'text-yellow-600' : '' }}">
                    Form
                </a>
            </li>
        </ul>
    </div>
</nav>
