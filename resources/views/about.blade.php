<x-app-layout>

    <section class="py-20 bg-slate-950 min-h-screen">

        <div class="max-w-6xl mx-auto px-6">

            <!-- Judul -->

            <div class="text-center mb-12">

                <h1 class="text-5xl font-extrabold text-white">

                    👩‍💻 Tentang Saya

                </h1>

                <p class="text-gray-400 mt-4 text-lg">

                    Mahasiswi Teknik Informatika yang tertarik pada dunia teknologi dan AI.

                </p>

            </div>

            <!-- Card Profil -->

            <div class="grid md:grid-cols-2 gap-10">

                <!-- Foto -->

                <div class="bg-slate-900 rounded-3xl p-8 border border-slate-800 shadow-2xl">

                    <div class="flex flex-col items-center">

                        <img
                            src="{{ asset('images/foto-saya.jpeg') }}"
                            class="w-52 h-52 rounded-full border-4 border-blue-500 object-cover">

                        <h2 class="text-3xl font-bold text-white mt-6">

                            NURFAUZIAH

                        </h2>

                        <p class="text-blue-400 mt-2">

                            Mahasiswi Teknik Informatika

                        </p>
<p class="text-gray-400 mt-4 text-center leading-7">

    Saya adalah mahasiswi Teknik Informatika Universitas Malikussaleh
    yang memiliki minat dalam bidang pengembangan website,
    kecerdasan buatan, dan teknologi digital. Saya senang
    mempelajari hal baru serta mengembangkan proyek berbasis Laravel.

</p>
                    </div>

                </div>

                <!-- Data Diri -->

                <div class="space-y-5">

                    <div class="bg-slate-900 p-6 rounded-2xl border border-slate-800">

                        <h3 class="text-xl font-bold text-white">

                            🎓 Universitas

                        </h3>

                        <p class="text-gray-300 mt-2">

                            Universitas Malikussaleh

                        </p>

                    </div>

                    <div class="bg-slate-900 p-6 rounded-2xl border border-slate-800">

                        <h3 class="text-xl font-bold text-white">

                            📚 Program Studi

                        </h3>

                        <p class="text-gray-300 mt-2">

                            Teknik Informatika

                        </p>

                    </div>

                    <div class="bg-slate-900 p-6 rounded-2xl border border-slate-800">

                        <h3 class="text-xl font-bold text-white">

                            📧 Email

                        </h3>

                        <p class="text-gray-300 mt-2">

                            nurfauziah..240170003@mhs.unimal.ac.id

                        </p>

                    </div>

                    <div class="bg-slate-900 p-6 rounded-2xl border border-slate-800">

                        <h3 class="text-xl font-bold text-white">

                            💻 Keahlian

                        </h3>

                        <p class="text-gray-300 mt-2">

                            Laravel • PHP • MySQL • Python

                        </p>

                    </div>

                    <div class="bg-slate-900 p-6 rounded-2xl border border-slate-800">

                        <h3 class="text-xl font-bold text-white">

                            🚀 Proyek

                        </h3>

                        <p class="text-gray-300 mt-2">

                            Website, jurnal, dan aplikasi sederhana.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

</x-app-layout>