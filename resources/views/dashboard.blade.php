<x-app-layout>

<div class="min-h-screen bg-slate-950 py-10">

```
<div class="max-w-7xl mx-auto px-6">



    <!-- Judul -->


    <div class="mb-10">


        <h1 class="text-5xl font-bold text-white">

            🚀 Dashboard Admin

        </h1>


        <p class="text-gray-400 mt-3 text-lg">

            Selamat datang di panel administrasi Zia TechVerse.

        </p>


    </div>





    <!-- Statistik -->


    <div class="grid md:grid-cols-4 gap-6">



        <!-- Artikel -->


        <div class="bg-slate-900 rounded-3xl p-6 shadow-xl">


            <div class="text-4xl mb-4">

                📚

            </div>


            <h3 class="text-gray-400">

                Total Artikel

            </h3>


            <p class="text-4xl font-bold text-white mt-2">

                {{ $totalArticles }}

            </p>


        </div>






        <!-- Kategori -->


        <div class="bg-slate-900 rounded-3xl p-6 shadow-xl">


            <div class="text-4xl mb-4">

                📂

            </div>


            <h3 class="text-gray-400">

                Total Kategori

            </h3>


            <p class="text-4xl font-bold text-white mt-2">

                {{ $totalCategories }}

            </p>


        </div>







        <!-- Published -->


        <div class="bg-slate-900 rounded-3xl p-6 shadow-xl">


            <div class="text-4xl mb-4">

                🟢

            </div>


            <h3 class="text-gray-400">

                Artikel Published

            </h3>


            <p class="text-4xl font-bold text-white mt-2">

                {{ $publishedArticles }}

            </p>


        </div>







        <!-- Draft -->


        <div class="bg-slate-900 rounded-3xl p-6 shadow-xl">


            <div class="text-4xl mb-4">

                📝

            </div>


            <h3 class="text-gray-400">

                Artikel Draft

            </h3>


            <p class="text-4xl font-bold text-white mt-2">

                {{ $draftArticles }}

            </p>


        </div>



    </div>





    <!-- Menu Cepat -->


    <div class="mt-10 bg-slate-900 rounded-3xl p-8 shadow-xl">



        <h2 class="text-3xl font-bold text-white mb-6">

            Menu Cepat

        </h2>



        <div class="flex gap-4 flex-wrap">



            <a href="{{ route('articles.index') }}"

            class="bg-blue-600 text-white px-6 py-3 rounded-xl font-bold">

                📚 Kelola Artikel

            </a>





            <a href="{{ route('categories.index') }}"

            class="bg-purple-600 text-white px-6 py-3 rounded-xl font-bold">

                📂 Kelola Kategori

            </a>




        </div>


    </div>




</div>
```

</div>

</x-app-layout>
