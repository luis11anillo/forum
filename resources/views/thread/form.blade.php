<div>
    <select 
        name="category_id"
        class="bg-slate-700 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs capitalize mb-4"
    >
        <option value="">Seleccionar categor&iacute;a</option>

        @foreach ($categories as $category)
            <option value="{{ $category->id }}"

                @if (old('category_id' , $thread->category_id) == $category->id)
                selected 
                @endif 

            >{{ $category->name }}</option>
        @endforeach

    </select>

    <input 
        type="text" 
        name="title" 
        placeholder="Titulo"
        value="{{ old('title', $thread->title) }}"
        class="bg-slate-700 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs mb-4"
    >

    <textarea 
        name="content" 
        placeholder="Descripc&iacute;on del problema"
        rows="10"
        class="bg-slate-700 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs mb-4"
    >{{ old('content', $thread->content) }}</textarea>

</div>