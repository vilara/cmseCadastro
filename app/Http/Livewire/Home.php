<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{

    public $user;
    
    public function mount($user){

    }
    public function render()
    {
        return view('livewire.home');
    }
}
