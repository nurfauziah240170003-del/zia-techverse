<x-app-layout>

    <x-slot name="header">
        <h2 class="font-bold text-2xl text-white">
            📚 Data Artikel
        </h2>
    </x-slot>

    <div class="min-h-screen bg-slate-950 py-8">

        <div class="max-w-7xl mx-auto px-6">

            {{-- Notifikasi --}}
            @if(session('success'))

                <div class="mb-5 bg-green-500/20 border border-green-500 text-green-300 px-4 py-3 rounded-xl">

                    {{ session('success') }}

                </div>

            @endif

            <div class="bg-slate-900 shadow-2xl rounded-3xl p-8">

                {{-- Header --}}
                <div class="flex justify-between items-center mb-8">

                    <div>

                        <h3 class="text-3xl font-bold text-white">

                            Daftar Artikel

                        </h3>

                        <p class="text-gray-400 mt-2">

                            Kelola seluruh artikel yang telah dibuat.

                        </p>

                    </div>

                    <a href="{{ route('articles.create') }}"
                       class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-xl font-bold hover:scale-105 transition">

                        + Tambah Artikel

                    </a>

                </div>

                {{-- Tabel --}}
                <div class="overflow-x-auto rounded-2xl">

                    <table class="w-full">

                        <thead class="bg-slate-800 text-gray-300">

                            <tr>

                                <th class="px-4 py-4">
                                    No
                                </th>

                                <th class="px-4 py-4">
                                    Thumbnail
                                </th>

                                <th class="px-4 py-4">
                                    Judul
                                </th>

                                <th class="px-4 py-4">
                                    Kategori
                                </th>

                                <th class="px-4 py-4">
                                    Status
                                </th>

                                <th class="px-4 py-4">
                                    Tanggal
                                </th>

                                <th class="px-4 py-4 text-center">
                                    Aksi
                                </th>

                            </tr>

                        </thead>

                        <tbody class="bg-slate-900 text-white">

                            @forelse($articles as $article)

                                <tr class="border-b border-slate-800 hover:bg-slate-800 transition">

                                    <td class="px-4 py-4 text-center">

                                        {{ $loop->iteration }}

                                    </td>

                                    <td class="px-4 py-4 text-center">

                                        @if($article->thumbnail)

                                            <img
                                                src="{{ asset('storage/'.$article->thumbnail) }}"
                                                class="w-24 h-16 object-cover rounded-xl mx-auto shadow-lg">

                                        @else

                                            <span class="text-gray-500 italic">

                                                Tidak ada gambar

                                            </span>

                                        @endif

                                    </td>

                                    <td class="px-4 py-4 font-semibold">

                                        {{ $article->title }}

                                    </td>

                                    <td class="px-4 py-4 text-center">

                                        <span class="bg-blue-600 px-3 py-1 rounded-full text-sm">

                                            {{ $article->category->name ?? 'Tanpa Kategori' }}

                                        </span>

                                    </td>

                                    <td class="px-4 py-4 text-center">

                                        @if($article->status == 'published')

                                            <span class="bg-green-600 px-3 py-1 rounded-full text-sm">

                                                Published

                                            </span>

                                        @else

                                            <span class="bg-yellow-500 text-black px-3 py-1 rounded-full text-sm">

                                                Draft

                                            </span>

                                        @endif

                                    </td>

                                    <td class="px-4 py-4 text-center text-gray-300">

                                        {{ $article->created_at->translatedFormat('d F Y') }}

                                    </td>

                                    <td class="px-4 py-4">

                                        <div class="flex justify-center gap-2">

                                            <a href="{{ route('articles.show', $article->id) }}"
                                               class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded-lg font-semibold">

                                                Lihat

                                            </a>

                                            <a href="{{ route('articles.edit', $article->id) }}"
                                               class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-semibold">

                                                Edit

                                            </a>

                                            <form action="{{ route('articles.destroy', $article->id) }}"
                                                  method="POST">

                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    onclick="return confirm('Yakin ingin menghapus artikel ini?')"
                                                    class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-semibold">

                                                    Hapus

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="7"
                                        class="text-center py-10 text-gray-400">

                                        Belum ada artikel.

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                    {{-- Pagination --}}
                    <div class="mt-8">

                        {{ $articles->links() }}

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>