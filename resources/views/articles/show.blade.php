<x-app-layout>

    <div class="min-h-screen bg-slate-950 py-10">

        <div class="max-w-5xl mx-auto px-6">

            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

                @if($article->thumbnail)

                    <img
                        src="{{ asset('storage/'.$article->thumbnail) }}"
                        class="w-full h-96 object-cover">

                @endif

                <div class="p-10">

                    <h1 class="text-4xl font-bold text-slate-900">

                        {{ $article->title }}

                    </h1>

                    <div class="mt-4 text-gray-500">

                        📂 {{ $article->category->name ?? 'Tanpa Kategori' }}

                        <br>

                        📅 {{ $article->created_at->format('d M Y') }}

                    </div>

                    <hr class="my-6">

                    <p class="text-lg leading-relaxed text-gray-700">

                        {{ $article->content }}

                    </p>

                    <!-- Komentar -->

                    <div class="mt-12">

                        <h2 class="text-2xl font-bold text-slate-900 mb-6">

                            💬 Komentar

                        </h2>

                        @auth

                            <form
                                action="{{ route('comments.store', $article->id) }}"
                                method="POST">

                                @csrf

                                <textarea
                                    name="content"
                                    rows="4"
                                    placeholder="Tulis komentar..."
                                    class="w-full border rounded-xl p-4"></textarea>

                                <button
                                    type="submit"
                                    class="mt-4 bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700">

                                    Kirim Komentar

                                </button>

                            </form>

                        @else

                            <p class="text-gray-500">

                                Silakan login terlebih dahulu untuk memberikan komentar.

                            </p>

                        @endauth

                        <div class="mt-8 space-y-4">

                            @forelse ($article->comments as $comment)

                                <div class="bg-slate-100 p-5 rounded-xl">

                                    <h3 class="font-bold text-slate-800">

                                        {{ $comment->user->name }}

                                    </h3>

                                    <p class="text-gray-500 text-sm mb-3">

                                        {{ $comment->created_at->format('d M Y H:i') }}

                                    </p>

                                    <p class="text-slate-700">

                                        {{ $comment->content }}

                                    </p>

                                </div>

                            @empty

                                <p class="text-gray-500">

                                    Belum ada komentar.

                                </p>

                            @endforelse

                        </div>

                    </div>

                    <div class="mt-8">

                        <a href="{{ route('artikel') }}"
                            class="bg-slate-800 text-white px-6 py-3 rounded-xl hover:bg-black">

                            ← Kembali ke Artikel

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>