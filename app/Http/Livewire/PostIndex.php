<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostIndex extends Component
{
    public function render()
    {
        return view('livewire.post-index', [
            'posts' => Post::latest()->get()
        ]);
    }
}
