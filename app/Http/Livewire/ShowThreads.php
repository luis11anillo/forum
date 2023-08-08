<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Thread;

class ShowThreads extends Component
{
    public function render()
    {
        //$categories = Category::paginate(10); // Pagina las categorías mostrando 10 por página
        //$threads = Thread::latest()->paginate(15); // Pagina los hilos mostrando 15 por página

        //withCount() nos permite contar

        $categories = Category::get();
        $threads = Thread::latest()->withCount('replies')->get();

        return view('livewire.show-threads', [
            'categories' => $categories,
            'threads' => $threads,
        ]);
    }
}
