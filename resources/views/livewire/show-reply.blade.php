<div>
    <div class="rounded-md bg-gradient-to-r from-slate-700 to-slate-800 hover:to-slate-700 mb-4">
        <div class="p-4 flex gap-4">
            <div>
                <img src="{{ $reply->user->avatar() }}" alt="{{ $reply->user->name }}" class="rounded-md">
            </div>
            <div class="w-full">
                <p class="mb-2 text-blue-600 font-semibold text-xs">
                        {{ $reply->user->name }}
                </p>
                <p class="text-white/60 text-xs">
                    @if($is_editing)
                        <form wire:submit.prevent="updateReply" class="mt-4">
                            <input 
                                type="text"
                                placeholder="Reply"
                                class="bg-slate-700 border-1 border-blue-400 rounded-md w-full p-3 text-white/60 text-xs"
                                wire:model.defer="content"
                            >
                        </form>
                    @else
                        {{ $reply->content }}
                    @endif
                </p>

                @if($is_creating)
                <form wire:submit.prevent="postChild" class="mt-4">
                    <input 
                        type="text"
                        placeholder="Reply"
                        class="bg-slate-700 border-1 border-blue-400 rounded-md w-full p-3 text-white/60 text-xs"
                        wire:model.defer="content"
                    >
                </form>
                @endif

                <p class="mt-4 text-white/60 text-xs flex gap-2 justify-end">
                    @if(is_null($reply->reply_id))
                        {{-- usamos toogle para cambiar el estado de una veriable booleana 'is_creating' --}}
                        <a href="#" wire:click.prevent="$toggle('is_creating')" class="hover:text-white">Responder</a>
                    @endif
                    @can('update', $reply)
                        <a href="#" wire:click.prevent="$toggle('is_editing')" class="hover:text-white">Editar</a>
                    @endcan
                </p>
            </div>
        </div>
    </div>

    @foreach ($reply->replies as $item)
        <div class="ml-8">
            @livewire('show-reply', ['reply' => $item], key('reply-'.$item->id))
        </div>    
    @endforeach
</div>

