<x-app-layout>
    <div class="max-w-4xl mx-auto px-2 sm:px-6 lg:px-8 py-12">
        <div class="rounded-md bg-gradient-to-r from-slate-700 to-slate-800 mb-4">
            <div class="p-4">
                    <h2 class="mb-4 text-xl font-semibold text-white/90">
                        Pregunta a la comunidad
                    </h2>

                    <form action="{{ route('threads.store') }}" method="POST">
                        @csrf

                        @include('thread.form')

                        <input 
                            type="submit"
                            value="Crear pregunta"
                            class="w-full py-4 bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500  text-white/80 text-xs font-bold rounded-md text-center"
                        >
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>
