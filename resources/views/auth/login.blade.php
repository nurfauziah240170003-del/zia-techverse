<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-slate-950 px-4 py-10">

        <div class="grid md:grid-cols-2 bg-slate-900 rounded-3xl overflow-hidden shadow-2xl max-w-6xl w-full">

            <!-- Bagian Kiri -->

            <div class="hidden md:flex flex-col justify-center p-12 bg-gradient-to-br from-slate-950 via-blue-950 to-slate-900">

                <img
    src="{{ asset('images/logo-ziaa.jpeg') }}"
    alt="Logo Zia TechVerse"
    class="w-32 h-32 rounded-full border-4 border-blue-500 shadow-2xl mb-8 mx-auto">

                <h1 class="text-5xl font-bold text-white mb-5">

                    🚀 Zia TechVerse

                </h1>

                <p class="text-gray-300 text-xl leading-10">

                    Jelajahi dunia teknologi, Artificial Intelligence,
                    machine learning, dan inovasi digital masa depan.

                </p>

            </div>

            <!-- Bagian Kanan -->

            <div class="bg-slate-900 p-12">

                <h2 class="text-5xl font-bold text-white mb-3">

                    Login

                </h2>

                <p class="text-gray-400 mb-10 text-lg">

                    Masuk ke dashboard admin.

                </p>

                <form method="POST" action="{{ route('login') }}">

                    @csrf

                    <!-- Email -->

                    <div class="mb-6">

                        <label class="block text-white font-semibold mb-3">

                            Email

                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            class="w-full p-4 rounded-xl bg-slate-800 border border-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">

                    </div>

                    <!-- Password -->

                    <div class="mb-6">

                        <label class="block text-white font-semibold mb-3">

                            Password

                        </label>

                        <input
                            type="password"
                            name="password"
                            required
                            class="w-full p-4 rounded-xl bg-slate-800 border border-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">

                    </div>

                    <!-- Remember -->

                    <div class="mb-8 flex items-center gap-3">

                        <input
                            type="checkbox"
                            name="remember"
                            class="rounded border-slate-700 bg-slate-800">

                        <span class="text-gray-300">

                            Ingat saya

                        </span>

                    </div>

                    <!-- Tombol -->

                    <button
                        type="submit"
                        class="w-full py-4 rounded-xl bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold text-lg hover:scale-105 transition duration-300">

                        🚀 Login

                    </button>

                </form>

            </div>

        </div>

    </div>

</x-guest-layout>