<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdministrarCliente extends Component
{
    public $usuario;
    public function render()
    {
        return view('livewire.administrar-cliente');
    }

    public function mount($usuario)
    {
        $this->usuario = User::find($usuario);
    }
}
