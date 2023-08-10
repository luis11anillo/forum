<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Thread;

class ShowThreads extends Component
{
    public $search = '';
    public $category = '';

    public function filterByCategory($category) 
    {
        $this->category = $category;
    }

    public function render()
    {
        //withCount() nos permite contar

        $categories = Category::get();
        
        // CONSULTA: 
        $threads = Thread::query();
        $threads->where('title', 'like', "%$this->search%"); 

        if ($this->category) {
            $threads->where('category_id', $this->category);
        }

        $threads->withCount('replies');
        $threads->latest();
        //dd($threads);

        return view('livewire.show-threads', [
            'categories' => $categories,
            'threads' => $threads->get(),
        ]);
    }
}
