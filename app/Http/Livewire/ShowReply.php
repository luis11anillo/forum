<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reply;

class ShowReply extends Component
{

    public Reply $reply;
    public $content = '';
    public $is_creating = false; 
    public $is_editing = false;

    // Se mantiene el updated, y se coloca en camel case el texto de la propiedad
    // EX:
    public function updatedIsCreating() 
    {
        $this->is_editing = false;
        $this->content = '';
    }

    public function updatedIsEditing() 
    {
        $this->is_creating = false;
        $this->content = $this->reply->content;
    }

    /* Refrescar: */
    protected $listeners = ['refresh' => '$refresh'];


    /* Editar */
    public function updateReply() 
    {        
        // validate
        $this->validate(['content' => 'required']);

        // Update
        $this->reply->update(['content' => $this->content ]);

        // refresh
        $this->is_editing = false;
    }


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
