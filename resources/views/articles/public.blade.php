<x-app-layout>

    <div class="min-h-screen bg-slate-950 py-12">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-12">

                <h1 class="text-5xl font-bold text-white">
                    📚 Semua Artikel
                </h1>

                <p class="text-gray-400 mt-3">
                    Jelajahi berbagai artikel teknologi dan Artificial Intelligence.
                </p>

            </div>

            <!-- Form Pencarian dan Filter -->

            <form action="{{ route('artikel') }}" method="GET">

                <div class="grid md:grid-cols-3 gap-4 mb-10">

                    <input
                        type="text"
                        name="search"
                        value="{{ $search }}"
                        placeholder="Cari artikel..."
                        class="px-5 py-4 rounded-xl bg-slate-900 text-white border border-slate-700">

                    <select
                        name="category"
                        class="px-5 py-4 rounded-xl bg-slate-900 text-white border border-slate-700">

                        <option value="">Semua Kategori</option>

                        @foreach ($categories as $cat)

                            <option
                                value="{{ $cat->id }}"
                                {{ $category == $cat->id ? 'selected' : '' }}>

                                {{ $cat->name }}

                            </option>

                        @endforeach

                    </select>

                    <button
                        type="submit"
                        class="bg-blue-600 text-white rounded-xl font-bold hover:bg-blue-700">

                        🔎 Cari

                    </button>

                </div>

            </form>

            <!-- Daftar Artikel -->

            <div class="grid md:grid-cols-3 gap-8">

                @forelse($articles as $article)

                    <div class="bg-slate-900 rounded-3xl overflow-hidden shadow-xl hover:scale-105 transition">

                        @if($article->thumbnail)

                            <img
                                src="{{ asset('storage/'.$article->thumbnail) }}"
                                class="w-full h-56 object-cover">

                        @else

                            <div class="h-56 bg-slate-800 flex items-center justify-center">

                                <span class="text-gray-500">

                                    Tidak ada gambar

                                </span>

                            </div>

                        @endif

                        <div class="p-6">

                            <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">

                                📂 {{ $article->category->name ?? 'Tanpa Kategori' }}

                            </span>

                            <h2 class="text-white text-2xl font-bold mt-4">

                                {{ $article->title }}

                            </h2>

                            <p class="text-gray-400 mt-3">

                                {{ Str::limit(strip_tags($article->content), 120) }}

                            </p>

                            <p class="text-gray-500 text-sm mt-4">

                                📅 {{ $article->created_at->format('d M Y') }}

                            </p>

                            <a href="{{ route('artikel.show', $article->id) }}"
                                class="inline-block mt-5 text-blue-400 font-bold">

                                Baca Selengkapnya →

                            </a>

                        </div>

                    </div>

                @empty

                    <div class="col-span-3 text-center text-gray-400">

                        Belum ada artikel.

                    </div>

                @endforelse

            </div>

            <!-- Pagination -->

            <div class="mt-10">

                {{ $articles->links() }}

            </div>

        </div>

    </div>

</x-app-layout>