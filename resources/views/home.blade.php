<x-app-layout>

    <!-- Banner -->
    <section class="relative overflow-hidden min-h-screen">

    <img
        src="{{ asset('images/banner-zia.jpeg') }}"
        class="w-full h-screen object-cover object-center"
        alt="Banner">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-950/70 to-black/40"></div>

        <!-- Efek Glow -->
        <div class="absolute top-32 left-20 w-96 h-96 bg-blue-500/20 blur-3xl rounded-full"></div>

        <div class="absolute bottom-20 right-20 w-80 h-80 bg-purple-500/20 blur-3xl rounded-full"></div>

        <div class="absolute inset-0 flex items-center">

            <div class="max-w-7xl mx-auto px-8 w-full">

                <div class="max-w-3xl">

                    <span class="inline-block px-4 py-2 mb-6 rounded-full bg-blue-500/20 text-blue-300 border border-blue-500/40">

                        🚀 Selamat Datang di Zia TechVerse

                    </span>

                    <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-8">

                        Dunia Teknologi dan

                        <span class="bg-gradient-to-r from-blue-400 via-cyan-400 to-purple-500 bg-clip-text text-transparent">

                            Artificial Intelligence

                        </span>

                    </h1>

                    <p class="text-gray-300 text-xl leading-relaxed mb-10">

                        Temukan artikel terbaru tentang AI, pemrograman,
                        machine learning, cyber security, dan berbagai
                        inovasi digital masa depan.

                    </p>

                    <div class="flex flex-wrap gap-4">

                        <a href="{{ route('artikel') }}"
                            class="bg-gradient-to-r from-blue-600 to-purple-600 px-8 py-4 rounded-full text-white font-bold hover:scale-105 transition duration-300 shadow-xl">

                            🚀 Jelajahi Artikel

                        </a>

                        <a href="#artikel"
                            class="border border-slate-500 px-8 py-4 rounded-full text-white hover:bg-slate-800 transition">

                            📚 Artikel Terbaru

                        </a>

                    </div>

                    <!-- Statistik -->
                    <div class="flex flex-wrap gap-10 mt-14">

                        <div>

                            <h3 class="text-3xl font-bold text-white">

                                {{ $articles->count() }}+

                            </h3>

                            <p class="text-gray-400">

                                Artikel

                            </p>

                        </div>

                        <div>

                            <h3 class="text-3xl font-bold text-white">

                                6+

                            </h3>

                            <p class="text-gray-400">

                                Kategori

                            </p>

                        </div>

                        <div>

                            <h3 class="text-3xl font-bold text-white">

                                AI

                            </h3>

                            <p class="text-gray-400">

                                Teknologi Masa Depan

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Artikel -->
    <section id="artikel" class="bg-slate-950 py-20">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-14">

                <h2 class="text-5xl font-extrabold text-white">

                    🚀 Artikel Terbaru

                </h2>

                <p class="text-gray-400 mt-3 text-lg">

                    Temukan informasi teknologi, AI, dan inovasi digital.

                </p>

            </div>

            <div class="grid md:grid-cols-3 gap-8">

                @foreach ($articles as $article)

                    <div class="bg-slate-900 rounded-3xl overflow-hidden shadow-2xl border border-slate-800 hover:border-blue-500 hover:-translate-y-3 hover:shadow-blue-500/20 transition duration-300">

                        @if ($article->thumbnail)

                            <img
                                src="{{ asset('storage/' . $article->thumbnail) }}"
                                class="w-full h-56 object-cover"
                                alt="{{ $article->title }}">

                        @else

                            <div class="w-full h-56 bg-slate-800 flex items-center justify-center text-gray-400">

                                Tidak ada gambar

                            </div>

                        @endif

                        <div class="p-6">

                            <span class="inline-block px-3 py-1 mb-3 text-sm rounded-full bg-blue-600 text-white">

                                {{ $article->category->name ?? 'Tanpa Kategori' }}

                            </span>

                            <h3 class="text-white text-2xl font-bold mb-3">

                                {{ $article->title }}

                            </h3>

                            <p class="text-gray-400 mb-5">

                                {{ substr(strip_tags($article->content), 0, 120) }}...

                            </p>

                            <a href="{{ route('artikel.show', $article->id) }}"
                                class="text-blue-400 font-semibold hover:text-purple-400 transition">

                                Baca selengkapnya →

                            </a>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-slate-800 py-8">

        <div class="max-w-7xl mx-auto px-6 text-center">

            <h3 class="text-2xl font-bold text-white mb-2">

                🚀 Zia TechVerse

            </h3>

            <p class="text-gray-400">

                Explore • Learn • Innovate

            </p>

            <p class="text-gray-500 mt-4 text-sm">

                © 2026 Zia TechVerse. All rights reserved.

            </p>

        </div>

    </footer>

</x-app-layout>