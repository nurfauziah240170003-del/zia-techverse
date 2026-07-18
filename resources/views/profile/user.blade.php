<x-app-layout>

    <div class="min-h-screen bg-slate-950 py-10">

        <div class="max-w-3xl mx-auto bg-slate-900 rounded-3xl p-8">

            <div class="text-center">

                <img src="{{ asset('images/robot-ai.png') }}"
                    class="w-32 h-32 rounded-full mx-auto">

                <h1 class="text-3xl text-white font-bold mt-5">
                    {{ Auth::user()->name }}
                </h1>

                <p class="text-gray-400">
                    {{ Auth::user()->email }}
                </p>

            </div>

        </div>

    </div>

</x-app-layout>