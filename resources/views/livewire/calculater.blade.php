

<div class="flex justify-center items-center flex-col gap-y-3 mt-10">
    <div class="">
        <span>Result: {{$result}}</span>
    </div>
    <div class="mx-auto flex justify-center items-center gap-4 px-10 ">
        <input type="number" wire:model="number1" class="w-full flex-1 p-3 rounded-md outline-none border-2 border-black shadow ">
        <select name="" id="" wire:model="action" class="p-3 rounded overflow-hidden">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="number" name="" id="" wire:model="number2" class="w-full flex-1 p-3 rounded-md outline-none border-2 border-black shadow ">
    </div>
    <div class="">
        <button wire:click="calculate" class="{{$disabled ? 'disabled' : ''}} p-2 border-none rounded bg-green-500 w-full disabled:cursor-not-allowed disabled:bg-opacity-90">Cal</button>
    </div>
</div>
