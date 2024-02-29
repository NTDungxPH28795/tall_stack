<?php

namespace App\Livewire\Todo;

use Livewire\Component;

class TodoList extends Component
{
    public $todoList = [];

    public function mount($todoList = []){
        $this->todoList = $todoList;
    }

    public function delete($id){
        // dd($id);
        $this->dispatch('deleted_todo',$id);
    }

    public function completed($id, $status){
        // dd($id, $status);
        $this->dispatch('completed_todo', compact('id', 'status'));
    }

    public function render()
    {
        return view('livewire.todo.todo-list');
    }
}
