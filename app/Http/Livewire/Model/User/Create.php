<?php

namespace App\Http\Livewire\Model\User;

use App\User;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $cpf;
    public $email;

    protected $rules = [
        'name' => 'required|string|min:6',
        'cpf' => 'required|string|max:500',
    ];

    public function cadastrar(){

        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'cpf' => $this->cpf
        ]);

        redirect('/home');

    }

   
    public function render()
    {
        return view('livewire.model.user.create');
    }
}
