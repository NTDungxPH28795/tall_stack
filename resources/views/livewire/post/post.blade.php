<div>
    @if (session('msg'))
        {{ session ('msg') }}
    @endif
    <h1>Danh sách bài viết</h1>
    <button wire:click="NavigateCreate">Create</button>
    @foreach ($posts as $post)
    <div class="flex">
        <h3 wire:key="{{$post->id}}">{{$post->name}}</h3>
        <button type="button">
            <a href="/posts/edit/{{$post->id}}">Edit</a>
        </button>
        <button type="button" wire:click="delete({{ $post->id }})">
            Delete
        </button>
    </div>
    @endforeach
</div>