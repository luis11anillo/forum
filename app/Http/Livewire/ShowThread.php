<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;

class ShowThread extends Component
{
    //Hce una busqueda implicita, por id en el componente (Thread)
    public Thread $thread;

    public $content = ''; 

    public function postReply() 
    {
        
        //validate
        $this->validate(['content' => 'required']);

        //create
        auth()->user()->replies()->create([
            'thread_id' => $this->thread->id,
            'content' => $this->content
        ]);

        //refresh
        $this->content = '';
    }

    public function render()
    {
        return view('livewire.show-thread', [
            'replies' => $this->thread
                ->replies()
                ->whereNull('reply_id')
                ->with('user', 'replies.user', 'replies.replies' )
                ->get()
        ]);
    }
}
