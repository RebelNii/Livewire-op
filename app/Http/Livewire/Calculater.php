<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculater extends Component
{

    public int $number1 = 0;
    public int $number2 = 0;
    public string $action = '+';
    public float $result = 0;
    public bool $disabled = false;

    public function render()
    {
        return view('livewire.calculater');
    }

    public function calculate(){
        $num1 = (float) $this->number1;
        $num2 = (float) $this->number2;

        if($this->action === '+'){
            return $this->result = $num1 + $num2;
        }else if($this->action === '-'){
            return $this->result = $num1 - $num2;
        }else if($this->action === '/'){
            return $this->result = $num1 / $num2;
        }else if($this->action === '*'){
            return $this->result = $num1 * $num2;
        }else if($this->action === '%'){
            return $this->result = ($num1 / 100) * $num2;
        }
    }

    public function update($property){
        if($this->number1 = '' || $this->number2 = ''){
            return $this->disabled = true;
        }else{
            return $this->disabled = false;
        }
    }
}
