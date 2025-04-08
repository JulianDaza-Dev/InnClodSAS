<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VerOrdenes extends Component
{
    public $usuario_actual;
    public $ordenes;
    public function render()
    {
        return view('livewire.ver-ordenes');
    }



    public function mount()
    {
        $this->usuario_actual = Auth::user()->id;
        $this->ordenes = Order::where('client_id',$this->usuario_actual)->where('estado',1)->get();
        foreach ($this->ordenes as $orden) {
            
        }

    }
}
