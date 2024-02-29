<ul class="tdl">
    @foreach ($todoList as $item)
    <li wire:key="{{$item['id']}}">
        <input type="checkbox" wire:change = "completed('{{$item['id']}}', $event.target.checked)" {{$item['completed'] ? 'checked': ''}}>
        <span class="{{$item['completed'] ? 'completed': ''}}">{{$item['name']}}</span>
        <button class="border rounded border-black bg-gray-200"
        x-on:click="$wire.delete('{{$item['id']}}')"
        x-on:confirm="Are you sure?">&times;</button>
    </li>
    @endforeach
</ul>
