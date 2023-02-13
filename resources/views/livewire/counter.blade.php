

<div class="flex justify-center items-center gap-6">
    <button wire:click="decrement" class="py-2 px-4 rounded bg-red-700 hover:bg-red-400">-</button>
    <span>{{$counter}}</span>
    <button wire:click="increment" class="py-2 px-4 rounded bg-green-700 hover:bg-green-400">+</button>
</div>

