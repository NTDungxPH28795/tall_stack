<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;

class Posts extends Component
{
    public $posts =[];
    #[Title('Post')]

    public function NavigateCreate(){
        // return redirect()->to('/posts/create');
        return $this->redirect('/posts/create', true);
    }

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.post.post');
    }
}
