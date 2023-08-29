<x-app-layout>
    <div class="max-w-4xl mx-auto px-2 sm:px-6 lg:px-8 py-12">
        <div class="rounded-md bg-gradient-to-r from-slate-700 to-slate-800 mb-4">
            <div class="p-4">
                    <h2 class="mb-4 text-xl font-semibold text-white/90">
                        Editar pregunta
                    </h2>

                    <form action="{{ route('threads.update', $thread) }}" method="POST">
                        {{-- (csrf) Token de seguridad se debe incluir en todos los form: --}}
                        @csrf

                        {{-- genera un campo oculto en el formulario que indica que el método HTTP utilizado para la solicitud es PUT. --}}
                        @method('PUT')

                        {{-- Incluir una vista (folder.file) --}}
                        @include('thread.form')

                        <input 
                            type="submit"
                            value="Editar pregunta"
                            class="w-full py-4 bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500  text-white/80 text-xs font-bold rounded-md text-center"
                        >
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>
