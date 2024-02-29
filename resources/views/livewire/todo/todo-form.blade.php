<form action="" wire:submit="createTodo">
    <input type="text" placeholder="Tên công việc" wire:model="name" value="{{$name}}" class="border rounded border-black">
    <button type="submit" class="border rounded border-black bg-gray-200">Thêm</button>
</form>