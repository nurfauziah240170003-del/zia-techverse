<x-app-layout>

    <x-slot name="header">
        <h2 class="text-2xl font-bold text-white">
            ✏️ Edit Artikel
        </h2>
    </x-slot>

    <div class="min-h-screen bg-slate-950 py-10">

        <div class="max-w-4xl mx-auto px-6">

            <div class="bg-slate-900 rounded-3xl shadow-2xl p-8">

                <h3 class="text-3xl font-bold text-white mb-2">
                    Edit Artikel
                </h3>

                <p class="text-gray-400 mb-8">
                    Ubah artikel teknologi dan AI yang sudah dibuat.
                </p>

                <form action="{{ route('articles.update', $article->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <!-- Judul -->
                    <div class="mb-6">

                        <label class="block text-white font-semibold mb-2">
                            Judul Artikel
                        </label>

                        <input
                            type="text"
                            name="title"
                            value="{{ $article->title }}"
                            class="w-full bg-slate-800 border border-slate-700 rounded-xl p-3 text-white focus:ring-2 focus:ring-blue-500 focus:outline-none"
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

                            @foreach($categories as $category)

                                <option value="{{ $category->id }}"
                                    {{ $article->category_id == $category->id ? 'selected' : '' }}>

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
                            required>{{ $article->content }}</textarea>

                    </div>

                    <!-- Thumbnail -->
                    <div class="mb-6">

                        <label class="block text-white font-semibold mb-2">
                            Thumbnail Baru (Opsional)
                        </label>

                        <input
                            type="file"
                            name="thumbnail"
                            class="w-full bg-slate-800 border border-slate-700 rounded-xl p-3 text-white">

                        @if($article->thumbnail)

                            <div class="mt-4">

                                <p class="text-gray-400 mb-2">
                                    Thumbnail saat ini:
                                </p>

                                <img
                                    src="{{ asset('storage/' . $article->thumbnail) }}"
                                    class="w-56 rounded-xl shadow-lg">

                            </div>

                        @endif

                    </div>

                    <!-- Status -->
                    <div class="mb-8">

                        <label class="block text-white font-semibold mb-2">
                            Status
                        </label>

                        <select
                            name="status"
                            class="w-full bg-slate-800 border border-slate-700 rounded-xl p-3 text-white">

                            <option value="draft"
                                {{ $article->status == 'draft' ? 'selected' : '' }}>
                                Draft
                            </option>

                            <option value="published"
                                {{ $article->status == 'published' ? 'selected' : '' }}>
                                Published
                            </option>

                        </select>

                    </div>

                    <!-- Tombol -->
                    <div class="flex gap-4">

                        <button
                            type="submit"
                            class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-3 rounded-xl text-white font-bold hover:scale-105 transition duration-300">

                            💾 Update Artikel

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