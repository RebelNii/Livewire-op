

<div class="px-5">
    <div class="block">
        <div class="w-full">
            <input type="text" wire:model="search" class="p-2 border-2 border-black shadow rounded-md w-full outline-none" placeholder="Search">
        </div>
        <div class="w-full mt-5">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="py-2 px-3 border-b-2 text-left">ID</th>
                        <th class="py-2 px-3 border-b-2 text-left">Title</th>
                        <th class="py-2 px-3 border-b-2 text-left">Price</th>
                        <th class="py-2 px-3 border-b-2 text-left">Image</th>
                        <th class="py-2 px-3 border-b-2 text-left">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $p)
                        <tr class="even:bg-slate-100">
                            <td class=" py-2 px-3 border-b">{{$p->id}}</td>
                            <td class=" py-2 px-3 border-b">{{$p->title}}</td>
                            <td class=" py-2 px-3 border-b"><span>Gh<small>&#8373;</small></span>{{$p->price}}</td>
                            <td class=" py-2 px-3 border-b w-16"><img src="{{$p->image}}" alt=""></td>
                            <td class="py-2 px-3 border-b">{{Str::limit($p->description, 25)}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-4">
        {{$products->links()}}
    </div>
</div>
