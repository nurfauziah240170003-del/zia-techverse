<x-app-layout>

    <div class="min-h-screen bg-slate-950 py-10">

        <div class="max-w-3xl mx-auto px-6">

            <div class="bg-slate-900 p-8 rounded-2xl shadow-xl">

                <h1 class="text-3xl font-bold text-white mb-6">
                    ➕ Tambah Kategori
                </h1>

                <form action="{{ route('categories.store') }}" method="POST">

                    @csrf

                    <!-- Nama Kategori -->
                    <div class="mb-5">

                        <label class="block text-white font-bold mb-2">
                            Nama Kategori
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Masukkan nama kategori"
                            class="w-full p-3 rounded-lg border border-slate-600 bg-slate-800 text-white">

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
                            class="w-full p-3 rounded-lg border border-slate-600 bg-slate-800 text-white">{{ old('description') }}</textarea>

                    </div>

                    <div class="flex gap-3">

                        <button
                            type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">

                            💾 Simpan

                        </button>

                        <a
                            href="{{ route('categories.index') }}"
                            class="bg-gray-600 hover:bg-gray-700 text-white px-5 py-3 rounded-lg">

                            ← Kembali

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>