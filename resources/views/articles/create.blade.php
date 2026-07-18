<x-app-layout>

    <x-slot name="header">
        <h2 class="text-2xl font-bold text-white">
            📝 Tambah Artikel
        </h2>
    </x-slot>

    <div class="min-h-screen bg-slate-950 py-10">

        <div class="max-w-4xl mx-auto px-6">

            <div class="bg-slate-900 rounded-3xl shadow-2xl p-8">

                <h3 class="text-3xl font-bold text-white mb-2">
                    Buat Artikel Baru
                </h3>

                <p class="text-gray-400 mb-8">
                    Tambahkan artikel teknologi dan AI terbaru.
                </p>

                <form action="{{ route('articles.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <!-- Judul -->
                    <div class="mb-6">

                        <label class="block text-white font-semibold mb-2">
                            Judul Artikel
                        </label>

                        <input
                            type="text"
                            name="title"
                            class="w-full bg-slate-800 border border-slate-700 rounded-xl p-3 text-white focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Masukkan judul artikel..."
                            required>

                    </div>

                    <!-- Kategori -->
                    <div class="mb-6">

                        <label class="block text-white font-semibold mb-2">
                            Kategori
                        </label>

                        <select
                            name="category_id"
                            class="w-full bg-slate-800 border border-slate-700 rounded-xl p-3 text-white focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>

                            <option value="">
                                -- Pilih Kategori --
                            </option>

                            @foreach($categories as $category)

                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                    <!-- Isi Artikel -->
                    <div class="mb-6">

                        <label class="block text-white font-semibold mb-2">
                            Isi Artikel
                        </label>

                        <textarea
                            name="content"
                            rows="8"
                            class="w-full bg-slate-800 border border-slate-700 rounded-xl p-3 text-white focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Tulis isi artikel..."
                            required></textarea>

                    </div>

                    <!-- Thumbnail -->
                    <div class="mb-6">

                        <label class="block text-white font-semibold mb-2">
                            Thumbnail
                        </label>

                        <input
                            type="file"
                            name="thumbnail"
                            class="w-full bg-slate-800 border border-slate-700 rounded-xl p-3 text-white">

                    </div>

                    <!-- Status -->
                    <div class="mb-8">

                        <label class="block text-white font-semibold mb-2">
                            Status
                        </label>

                        <select
                            name="status"
                            class="w-full bg-slate-800 border border-slate-700 rounded-xl p-3 text-white">

                            <option value="draft">
                                Draft
                            </option>

                            <option value="published">
                                Published
                            </option>

                        </select>

                    </div>

                    <!-- Tombol -->
                    <div class="flex gap-4">

                        <button
                            type="submit"
                            class="bg-gradient-to-r from-blue-600 to-purple-600 px-6 py-3 rounded-xl text-white font-bold hover:scale-105 transition duration-300">

                            💾 Simpan Artikel

                        </button>

                        <a href="{{ route('articles.index') }}"
                           class="bg-slate-700 px-6 py-3 rounded-xl text-white font-bold hover:bg-slate-600 transition">

                            ← Kembali

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>