<div>
    <h2>Update Post</h2>
    <form action="" wire:submit="handleSubmit">
        <input type="text" placeholder="Tên..." class="border border-black m-2 rounded" wire:model="name" value="{{$post->name}}"/>
        <button type="submit" class="border border-black m-1 rounded ">Submit</button>
    </form>
</div>
