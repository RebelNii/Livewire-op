<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    public string $search = '';

    protected $queryString = ['search'];

    public function render()
    {
        $query = Product::query();
        if($this->search){
            $query->where('title', 'LIKE', "%{$this->search}%")
                ->orWhere('description', 'LIKE', "%{$this->search}%");
        }
        return view('livewire.search', [
            'products' => $query->paginate(10)
        ]);
    }

    public function update($property){
        if($property === 'search'){
            $this->resetPage();
        }
    }
}
