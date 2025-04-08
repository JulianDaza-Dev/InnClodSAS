<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Ordenar extends Component
{
    public $usuario_actual;
    public $orden_actual;
    public $orden_actual_productos;
    public $productos_all;
    public function render()
    {
        return view('livewire.ordenar');
    }

    public function confirmar()
    {

        foreach ($this->productos_all as $producto) {
            $producto_ordenado = $this->orden_actual_productos->firstWhere('product_id', $producto->id);

            if ($producto_ordenado && $producto_ordenado->quantity > $producto->stock) {
                Session::flash('error', "El producto '{$producto->name}' tiene más cantidad ({$producto_ordenado->quantity}) que stock disponible ({$producto->stock}).");
                return;
            }

        }

        Order::where('client_id',$this->usuario_actual)->where('estado',0)->update(['estado'=>1]);

        foreach ($this->orden_actual_productos as $producto_ordenado) {
            $producto = $this->productos_all->firstWhere('id', $producto_ordenado->product_id);
        
            if ($producto) {
                $producto->stock -= $producto_ordenado->quantity;
                $producto->save();
            }
        }
        
        return to_route('inicio');
    }

    public function mount()
    {
        $this->usuario_actual = Auth::user()->id;
        $this->productos_all = Product::get();
        $this->orden_actual = Order::with('productos')->where('client_id', $this->usuario_actual)->where('estado', 0)->first();
        $this->orden_actual_productos = OrderDetails::with('productos')->where('order_id', $this->orden_actual->id)->get();



    }
}
