<div class="p-4">
    <h1 class="font-bold text-2xl">Todo App</h1>
    <livewire:todo.todo-list :todoList="$todoList" key="{{rand()}}"/>
    <livewire:todo.todo-form />
    @if ($msg)
        <p class="font-semibold">{{$msg}}</p>
    @endif
</div>

