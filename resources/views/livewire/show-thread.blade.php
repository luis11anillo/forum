<div class="max-w-4xl mx-auto px-2 sm:px-6 lg:px-8 flex gap-10 py-12">
    <div class="rounded-md bg-gradient-to-r from-slate-700 to-slate-800 mb-4">
        <div class="p-4 flex gap-4">
            <div>
                <img src="{{ $thread->user->avatar() }}" alt="{{ $thread->user->name }}" class="rounded-md">
            </div>
            <div class="w-full">
                <h2 class="mb-4 flex items-start justify-between">
                    <a href="{{ route('thread', $thread) }}" class="font-semibold text-white/80 ">
                        {{ $thread->title }}
                    </a>
                    <span
                        class="rounded-full text-xs py-2 px-4 capitalize"
                        style="color: {{ $thread->category->color }}; border: 1px solid {{ $thread->category->color }}"
                    >
                        {{ $thread->category->name }}
                    </span>
                </h2>
                <p class="mb-4 text-blue-600 font-semibold text-xs">
                        {{ $thread->user->name }}

                    <span class="text-gray-400 pl-3"> {{ $thread->created_at->diffForHumans() }} </span>
                </p>
                <p class="text-white/60">
                    {{ $thread->content }}
                </p>
            </div>
        </div>
    </div>

    {{-- Respuestas --}}
    
    {{-- Formulario --}}


</div>

