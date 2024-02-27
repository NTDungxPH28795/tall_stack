<div x-data="{ count: 0}">
    <h2 class="font-bold text-2xl"> Count: <span x-text="count"></span></h2>
    <button x-on:click="count--" class="border w-12 h-10 rounded-lg m-2 font-medium text-lg bg-red-600">-</button>
    <button x-on:click="count++" class="border w-12 h-10 rounded-lg m-2 font-medium text-lg bg-green-600">+</button>
</div>
