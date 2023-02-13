


<div class="">
    <div class="flex flex-col w-[400px] justify-center items-center bg-zinc-400 px-4 rounded-sm gap-y-3 py-3">
        <div class="w-full">
            <select class="w-full p-2 rounded" wire:model="selectedContinent" wire:change="changeContinent">
                <option value="-1">Select Continent</option>
                @foreach ($continents as $con)
                    <option value="{{$con->id}}">{{$con->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="w-full flex relative">
            <p wire:loading class="absolute text-center top-0 left-0 right-0 bottom-0 z-10 px-5 py-14 bg-white bg-opacity-90 text-4xl">
                Loading
            </p>
            <select class="w-full p-2 rounded" wire:model="selectedCountry">
                <option value="-1">Please Select Country</option>
                @foreach ($countries as $coun)
                    <option value="{{$coun->id}}">{{$coun->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
