<div class="">
    <div class="bg-red-400 w-full">
        <form wire:submit.prevent="submit"
            class="w-[400px] p-8 flex justify-center flex-col items-center bg-slate-700 rounded text-white">
            @if (session()->has('message'))
                <div class="bg-green-300 px-5 py-3 mb-3 w-full text-center rounded-sm">
                    <p class="uppercase">{{ session('message') }}</p>
                </div>
            @endif
            {{-- Role --}}
            <div class="flex gap-4">
                <label for="role">
                    <input type="radio" value="customer" name="role" wire:model="role">
                    Customer
                </label>
                <label for="role">
                    <input type="radio" value="vendor" name="role" wire:model="role">
                    Vendor
                </label>
            </div>
            <div class="mt-3 w-full">
                <div class="w-full">
                    <input type="text" wire:model.debounce.500ms="first_name"
                        class="p-2 border-2 border-black shadow outline-none rounded text-black w-full">
                    <div class="mt-1">
                        @error('first_name')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <input type="text" wire:model.debounce.500ms="last_name"
                        class="p-2 border-2 border-black outline-none rounded text-black w-full">
                    <div class="mt-1">
                        @error('last_name')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <input type="password" wire:model.debounce.500ms="password"
                        class="p-2 border-2 border-black shadow outline-none rounded text-black w-full">
                    <div class="mt-1">
                        @error('password')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <input type="text" wire:model.debounce.500ms="email"
                        class="p-2 border-2 border-black shadow outline-none rounded text-black w-full">
                    <div class="mt-1">
                        @error('email')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                @if ($role === 'vendor')
                    <div class="transition-all">
                        <input type="text" wire:model.debounce.500ms="company_name"
                            class="p-2 border-2 border-black shadow outline-none rounded text-black w-full transition-all">
                        <div class="mt-1">
                            @error('company_name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                @endif
                @if ($role === 'vendor')
                    <div class="transition-all mt-2">
                        <input type="text" wire:model.debounce.500ms="vat_number"
                            class="p-2 border-2 border-black shadow outline-none rounded text-black w-full transition-all">
                        <div class="mt-1">
                            @error('vat_number')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                @endif
            </div>
            <div class="">
                <button class="p-2 rounded-sm w-full bg-green-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
