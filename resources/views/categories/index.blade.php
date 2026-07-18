<x-app-layout>

```
<x-slot name="header">
    <h2 class="font-bold text-2xl text-white">
        📂 Data Kategori
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


        <div class="bg-slate-900 rounded-3xl shadow-2xl p-8">


            <!-- Header -->
            <div class="flex justify-between items-center mb-8">

                <div>

                    <h3 class="text-3xl font-bold text-white">
                        Daftar Kategori
                    </h3>

                    <p class="text-gray-400 mt-2">
                        Kelola seluruh kategori artikel Zia TechVerse.
                    </p>

                </div>


                <a href="{{ route('categories.create') }}"
                   class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-xl font-bold hover:scale-105 transition duration-300">

                    + Tambah Kategori

                </a>


            </div>



            <!-- Tabel -->

            <div class="overflow-x-auto rounded-2xl">


                <table class="w-full">


                    <thead class="bg-slate-800 text-white">


                        <tr>


                            <th class="px-4 py-4 text-center">
                                No
                            </th>


                            <th class="px-4 py-4 text-center">
                                Nama
                            </th>


                            <th class="px-4 py-4 text-center">
                                Slug
                            </th>


                            <th class="px-4 py-4 text-center">
                                Deskripsi
                            </th>


                            <th class="px-4 py-4 text-center">
                                Aksi
                            </th>


                        </tr>


                    </thead>




                    <tbody class="bg-slate-900 text-white">


                        @forelse($categories as $category)


                            <tr class="border-b border-slate-800 hover:bg-slate-800 transition">



                                <td class="px-4 py-4 text-center">

                                    {{ $loop->iteration }}

                                </td>




                                <td class="px-4 py-4 font-semibold">

                                    {{ $category->name }}

                                </td>




                                <td class="px-4 py-4 text-blue-400">

                                    {{ $category->slug }}

                                </td>




                                <td class="px-4 py-4 text-gray-300">

                                    {{ $category->description }}

                                </td>




                                <td class="px-4 py-4">


                                    <div class="flex justify-center gap-2">



                                        {{-- Edit --}}

                                        <a href="{{ route('categories.edit',$category->id) }}"

                                        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-semibold">

                                            Edit

                                        </a>




                                        {{-- Hapus --}}

                                        <form action="{{ route('categories.destroy',$category->id) }}"

                                        method="POST">


                                            @csrf

                                            @method('DELETE')



                                          <button
type="button"
onclick="deleteCategory('{{ $category->id }}')"
class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-semibold">

    Hapus

</button>



                                        </form>



                                    </div>


                                </td>



                            </tr>



                        @empty



                            <tr>


                                <td colspan="5"

                                class="text-center py-8 text-gray-400">


                                    Belum ada data kategori.


                                </td>


                            </tr>



                        @endforelse



                    </tbody>


                </table>


            </div>


        </div>


    </div>


</div>
```

</x-app-layout>
<script>

function deleteCategory(id)
{

    Swal.fire({

        title: 'Yakin ingin menghapus?',
        text: "Kategori yang dihapus tidak dapat dikembalikan!",
        icon: 'warning',

        showCancelButton: true,

        confirmButtonColor: '#dc2626',

        cancelButtonColor: '#64748b',

        confirmButtonText: 'Ya, Hapus!',

        cancelButtonText: 'Batal'


    }).then((result)=>{


        if(result.isConfirmed)
        {

            let form = document.createElement('form');

            form.method = 'POST';

            form.action = '/categories/' + id;


            let csrf = document.createElement('input');

            csrf.name = '_token';

            csrf.value = '{{ csrf_token() }}';

            csrf.type = 'hidden';



            let method = document.createElement('input');

            method.name = '_method';

            method.value = 'DELETE';

            method.type = 'hidden';



            form.appendChild(csrf);

            form.appendChild(method);


            document.body.appendChild(form);


            form.submit();


        }


    });


}

</script>
