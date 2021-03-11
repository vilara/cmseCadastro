<?php

namespace App\Http\Livewire\Model\User;

use App\Detail;
use App\User;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $cpf;
    public $email;
    public $idt;
    public $nome_completo;
    public $sexo;
    
    protected $rules = [
        'name' => 'required|string|unique:App\User,name',
        'cpf' => 'required|string|size:11|unique:App\User,cpf',
        'email' => 'required|email|unique:App\User,email',
        'idt' => 'required|digits:value',
        'nome_completo' => 'required|string|min:6',
        'sexo' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Esse campo é obrigatório',
        'name.min' => 'Mínimo de 6 caracteres',
        'name.unique' => 'Este nome já está cadastrado no sistema',
        'cpf.required' => 'Esse campo é obrigatório',
        'cpf.size' => 'Esse campo deve conter 11 dígitos',
        'cpf.unique' => 'Este cpf já está cadastrado no sistema',
        'email.required' => 'Esse campo é obrigatório',
        'email.email' => 'E-mail inválido',
        'email.unique' => 'Este email já está cadastrado no sistema',
        'idt.required' => 'Esse campo é obrigatório',
        'sexo.required' => 'Esse campo é obrigatório',
        'nome_completo.required' => 'Esse campo é obrigatório',
    ];


    

    public function cadastrar(){

        $this->validate();

       User::create([
            'name' => $this->name,
            'email' => $this->email,
            'cpf' => $this->cpf
        ]);

        //dd(User::where('cpf', $this->cpf)->get()->first()->id);

        Detail::create([
            'id' => User::where('cpf', $this->cpf)->get()->first()->id
        ]);



        session()->flash('message', 'Usuário cadastrado com sucesso.');
        redirect('/home');

    }

   
    public function render()
    {
        return view('livewire.model.user.create');
    }
}
