<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class UpdatePost extends Component
{
    public $post = null;
    public function mount($id){
        $this->post = Post::find($id);
        if(!$this->post){
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.post.update-post');
    }
}
