<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;


class CreatePost extends Component
{
    #[Title('Create Post')]
    public $name = null;
    public $result = null;
    public $posts = [];

    public function handleSubmit(){
        // dd($this->name);
        $post = new Post();
        $post->name = $this->name;
        $post->save();
        $this->result=$this->name;
        $this->name = '';
        // return redirect('/posts')->with('msg', "Successfully created");
        session()->flash('msg' , "Successfully created");
        return $this->redirect('/posts',true);
    }

    public function render()
    {
        return view('livewire.post.create-post');
    }
}

