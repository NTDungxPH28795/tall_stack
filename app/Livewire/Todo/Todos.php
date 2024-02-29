<?php

namespace App\Livewire\Todo;

use Livewire\Attributes\On;
use Livewire\Component;

class Todos extends Component
{
    public $todoList =[];
    public $msg = null;
    #[On('created_todo')]

    public function create_todo($name){
        if(!$name){
            $this->msg = 'Vui lòng nhập tên';
        } else {
        $this->todoList[] = [
            'id' => uniqid(),
            'name' => $name,
            'completed' => false
        ];
        $this->msg = 'Thêm thành công';
    }
    }

    #[On('deleted_todo')]

    public function delete_todo($id){
        // dd($id);
        $this->todoList = array_filter($this->todoList, function($item) use ($id) {
            return $item['id'] != $id;
        });
        $this->msg = 'Xóa thành công';
    }

    #[On('completed_todo')]

    public function completed_todo($data){
        // dd($data);
        extract($data);
        $this->todoList = array_map(function($item) use ($status, $id) {
            if($id == $item['id']){
                $item['completed'] = $status;
            }
            return $item;
        }, $this ->todoList);
        $this->msg = $status ? 'Đánh dấu thành công': 'Bỏ đánh dấu thành công';
        // dd($this->todoList);
    }

    // public function mount(){
    //     $this->todoList = [
    //         [
    //             'id' => 1,
    //             'name' => 'Công việc 1',
    //             'completed' => false
    //         ],
    //         [
    //             'id' => 2,
    //             'name' => 'Công việc 2',
    //             'completed' => false
    //         ],
    //         [
    //             'id' => 3,
    //             'name' => 'Công việc 3',
    //             'completed' => false
    //         ]
    //     ];
    // }

    public function render()
    {
        return view('livewire.todo.todos');
    }
}
