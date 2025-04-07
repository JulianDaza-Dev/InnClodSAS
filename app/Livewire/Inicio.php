<?php

namespace App\Livewire;

use App\Models\ClientProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PHPUnit\Framework\Constraint\Constraint;

class Inicio extends Component
{
     public $usuarios;

     public $usuario_actual;
     public $productos_disponibles;
     public $productos_all;

     public function administrar($id)
    {
        return to_route('administrar-cliente',['usuario'=>$id]);
    }



    public function render()
    {
        return view('livewire.inicio');
    }

    public function mount()
    {
        $this->usuarios = User::get();
        $this->usuario_actual = Auth::user()->id;
        $this->productos_disponibles =ClientProduct::with('productos')->where('client_id',$this->usuario_actual)->get();
        $this->productos_all =Product::get();

    } 
}
