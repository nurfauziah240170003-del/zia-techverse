<nav x-data="{ open: false }" class="bg-slate-900 border-b border-slate-800 shadow-lg">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between h-20 items-center">

            <!-- Logo -->
            <div class="flex items-center gap-4">

                <a href="{{ route('artikel') }}"
                    class="text-white hover:text-blue-400">

                    Artikel

                </a>

                <img
                    src="{{ asset('images/logo-ziaa.jpeg') }}"
                    class="w-12 h-12 rounded-full shadow-lg"
                    alt="Logo">

                <div>

                    <h1 class="text-xl font-bold text-white">
                        🚀 Zia TechVerse
                    </h1>

                    <p class="text-xs text-gray-400">
                        Technology & AI
                    </p>

                </div>

            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center gap-6">

                <a href="{{ url('/') }}"
                    class="text-gray-300 hover:text-white transition">

                    🏠 Home

                </a>

                <a href="{{ route('artikel') }}"
                    class="text-gray-300 hover:text-white transition">

                    📚 Artikel

                </a>

                <a href="{{ route('about') }}"
                    class="text-gray-300 hover:text-white transition">

                    👩‍💻 Tentang Saya

                </a>

                @auth

                    <a href="{{ route('dashboard') }}"
                        class="text-gray-300 hover:text-white transition">

                        🚀 Dashboard

                    </a>

                    <a href="{{ route('categories.index') }}"
                        class="text-gray-300 hover:text-white transition">

                        📂 Kategori

                    </a>

                    <!-- Profil User -->
                    <a href="{{ route('profile.user') }}"
                        class="flex items-center gap-3 hover:bg-slate-800 px-3 py-2 rounded-xl transition">

                        <img
                            src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=2563eb&color=fff"
                            class="w-10 h-10 rounded-full border-2 border-blue-500"
                            alt="User Profile">

                        <div>

                            <p class="font-bold text-white">

                                {{ Auth::user()->name }}

                            </p>

                            <p class="text-xs text-gray-400">

                                Administrator

                            </p>

                        </div>

                    </a>

                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}">

                        @csrf

                        <button
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-xl transition">

                            Logout

                        </button>

                    </form>

                @else

                    <a href="{{ route('login') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl">

                        Login

                    </a>

                @endauth

            </div>

        </div>

    </div>

</nav>