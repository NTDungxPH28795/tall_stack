<div>
    @if (session('msg'))
        {{ session ('msg') }}
    @endif
    <h1 class="font-bold text-2xl my-3 mx-24">Danh sách bài viết</h1>
    <button class="bg-gray-300 border rounded p-2 mx-5 my-2" wire:click="NavigateCreate">Create</button>
    <table class="mx-5 table-fixed w-96">
        <thead class="bg-gray-200">
            <tr>
                <th>Tên</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        @foreach ($posts as $post)
        <tbody>
            <tr>
                <td>
                    <h3 class="mx-2" wire:key="{{$post->id}}">{{$post->name}}</h3>
                </td>
                <td class="text-center">
                    <button type="button" class="bg-green-500 rounded p-2">
                        <a href="/posts/edit/{{$post->id}}">Edit</a>
                    </button>
                    <button type="button" wire:click="delete({{ $post->id }})" class="bg-red-500 rounded p-2"
                        wire:confirm="Are you sure you want to delete this post?">
                        Delete
                    </button>
                </td>
            </tr>
        </tbody>
        @endforeach

    </table>
</div>