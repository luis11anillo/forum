<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;

class ShowThread extends Component
{
    //Hce una busqueda implicita, por id en el componente (Thread)
    public Thread $thread;

    public function render()
    {
        return view('livewire.show-thread');
    }
}
