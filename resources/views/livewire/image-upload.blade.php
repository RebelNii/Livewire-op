

<div class="">
    <div class="w-full flex justify-center items-center">
        <form action="" wire:submit.prevent="save" class="w-[400px] bg-slate-100 flex flex-col justify-center items-center py-5 px-3">
            @if ($image)
                <div class="grid grid-cols-2 place-items-center">
                    @foreach ($image as $img)
                        <img src="{{$img->temporaryUrl()}}" alt="" class="w-[100px] h-[90px] object-cover">
                    @endforeach
                </div>
            @endif
            <div class="w-full mt-3">
                <input type="file" wire:model="image" class="w-full" multiple>
                <div class="mt-1">
                    @error('image')
                        <span class="text-red-500 text-sm font-bold">{{$message}}</span>
                    @enderror
                </div>
                <div class="w-full mt-2">
                    <button type="submit" class="bg-green-400 p-2 rounded border-none w-full">
                        Upload
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="grid grid-cols-3 place-items-center gap-5 mt-5">
        @foreach ($images as $im)
            <img src="{{$im}}" alt="" class="w-[200px] h-[130px]">
        @endforeach
    </div>
</div>
