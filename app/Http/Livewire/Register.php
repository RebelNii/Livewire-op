<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Register extends Component
{
    public string $email = '';
    public string $password = '';
    public string $first_name = '';
    public string $last_name = '';
    public string $role = 'customer';
    public string $company_name = '';
    public string $vat_number = '';

    // protected $rules = [
    //     'email' => ['required', Rule::unique('users','email')]
    // ];

    protected function rules(){
        return [
            'email' => ['required', Rule::unique('users','email')],
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => ['required', 'min:6'],
            'company_name' => ['required_if:role,vendor'],
            'vat_number' => ['required_if:role,vendor'],
        ];
    }

    public function render()
    {
        return view('livewire.register');
    }

    public function submit(){
        $this->validate();

        User::create([
            'name' => $this->first_name . '' . $this->last_name,
            'email' => $this->email,
            'password' => $this->password
        ]);
        
        Session()->flash('message', 'Success');


        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->password = '';
        $this->vat_number = '';
        $this->company_name = '';
        $this->role = '';
    }

    public function update($property){
        $this->validateOnly($property);
    }
}
