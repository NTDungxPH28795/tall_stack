<?php

namespace App\Livewire\Todo;

use Livewire\Component;

class TodoForm extends Component
{
    public $name = null;


    public function createTodo(){
        $this->dispatch('created_todo', $this->name);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.todo.todo-form');
    }
}
