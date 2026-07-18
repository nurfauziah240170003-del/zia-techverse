<x-app-layout>

    <div class="min-h-screen bg-slate-950 py-10">

        <div class="max-w-3xl mx-auto px-6">

            <div class="bg-slate-900 p-8 rounded-2xl shadow-xl">

                <h1 class="text-3xl font-bold text-white mb-6">
                    ✏️ Edit Kategori
                </h1>

                <form action="{{ route('categories.update', $category->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <!-- Nama Kategori -->
                    <div class="mb-5">

                        <label class="block text-white font-bold mb-2">
                            Nama Kategori
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name', $category->name) }}"
                            placeholder="Masukkan nama kategori"
                            style="background-color: #1e293b !important; color: #ffffff !important; caret-color: #ffffff !important;"
                            class="w-full p-3 rounded-lg border border-slate-600">

                        @error('name')
                            <p class="text-red-500 mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-5">

                        <label class="block text-white font-bold mb-2">
                            Deskripsi
                        </label>

                        <textarea
                            name="description"
                            rows="5"
                            placeholder="Masukkan deskripsi kategori"
                            style="background-color: #1e293b !important; color: #ffffff !important; caret-color: #ffffff !important;"
                            class="w-full p-3 rounded-lg border border-slate-600">{{ old('description', $category->description) }}</textarea>

                        @error('description')
                            <p class="text-red-500 mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <!-- Tombol -->
                    <div class="flex gap-3">

                        <button
                            type="submit"
                            class="bg-blue-600 hover:bg-blue-700 px-5 py-3 rounded-lg text-white font-semibold">

                            💾 Simpan

                        </button>

                        <a
                            href="{{ route('categories.index') }}"
                            class="bg-gray-600 hover:bg-gray-700 px-5 py-3 rounded-lg text-white font-semibold">

                            ← Kembali

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>