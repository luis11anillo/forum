<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reply;

class ShowReply extends Component
{

    public Reply $reply;
    public $content = '';
    public $is_creating = false; 

    /* Funcion de refrescar: */
    protected $listeners = ['refresh' => '$refresh'];

    public function postChild() 
    {
        /* Para que las respuestas hijas no tengas hijas */
        if(! is_null($this->reply->reply_id)) return;
        
        //validate
        $this->validate(['content' => 'required']);

        //create
        auth()->user()->replies()->create([
            'reply_id' => $this->reply->id,
            'thread_id' => $this->reply->thread->id,
            'content' => $this->content
        ]);

        //refresh
        $this->is_creating = false;
        $this->content = '';
        $this->emitSelf('refresh');
    }

    public function render()
    {
        return view('livewire.show-reply');
    }
}
