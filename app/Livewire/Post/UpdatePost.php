<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class UpdatePost extends Component
{
    public $name = null;
    public $post = null;
    
    public function mount($id){
        $this->post = Post::find($id);
        if(!$this->post){
            abort(404);
        }
    }

    public function update(){
        if($this->post){
            $this->post->name = $this->name;
            $this->post->save();
            $this->name = '';
            session()->flash('msg' , "Successfully updated");
            return $this->redirect('/posts',true);
        }
    }

    public function render()
    {
        return view('livewire.post.update-post');
    }
}
