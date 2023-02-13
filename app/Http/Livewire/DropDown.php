<?php

namespace App\Http\Livewire;

use App\Models\Continents;
use App\Models\Countries;
use Livewire\Component;

class DropDown extends Component
{
    public string $selectedContinent;
    public string $selectedCountry;
    public $continents;
    public $countries = [];

    public function mount(){
        $this->getContinents();
        // $this->getCountry();
    }

    public function render()
    {
        return view('livewire.drop-down');
    }

    public function getContinents(){
        $this->continents = Continents::query()->orderBy('name', 'ASC')->get();
    }

    public function changeContinent(){
        sleep(1);
        if($this->selectedContinent != '-1'){
            $this->countries = Countries::query()->where('continents_id', $this->selectedContinent)->orderBy('name', 'ASC')->get();
        }
    }

    public function getCountry(){
        $this->countries = Countries::query()->orderBy('name', 'ASC')->get();
    }
}
