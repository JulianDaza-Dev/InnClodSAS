<?php

namespace App\Livewire;

use App\Models\ClientProduct;
use App\Models\Order;
use App\Models\OrderDetails;
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

    public $productos_elegibles;
    public $productos_all;

    public $orden_actual;
    public $orden_actual_productos;
    public $product_id;


    public $quantity;

    public $validate;


    public function agregar_orden()
    {
        $validacion = $this->validate(
            [
                "product_id" => "required|min:1",
                "quantity" => "required|integer|min:1"
            ],
            [
                "product_id.required" => "producto requerido",
                "product_id.min" => "producto requerido",
                "quantity.required" => "cantidad requerida",
                "quantity.min" => "minima cantidad 1",
                "quantity.integer" => "minima cantidad 1"
            ]
        );

        if ($this->orden_actual === null) {
            $orden = Order::create([
                'client_id' => $this->usuario_actual,
                'estado' => 0
            ]);

            $validacion['order_id'] = $orden->id;

            OrderDetails::create($validacion);
        } else {
            $validacion['order_id'] = $this->orden_actual->id;
            // dd($validacion);
            OrderDetails::create($validacion);
        }
        return to_route('inicio');
    }
    public function administrar($id)
    {

        return to_route('administrar-cliente', ['usuario' => $id]);
    }

    public function ordenar()
    {

        return to_route('ordenar');
    }

    public function eliminar($id)
    {
        $producto_eliminar = OrderDetails::find($id);
        $producto_eliminar->delete();
        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.inicio');
    }

    public function mount()
    {
        $this->usuarios = User::get();
        $this->usuario_actual = Auth::user()->id;
        $this->productos_disponibles = ClientProduct::with('productos')->where('client_id', $this->usuario_actual)->get();
        $this->productos_all = Product::get();
        $this->orden_actual = Order::with('productos')->where('client_id', $this->usuario_actual)->where('estado', 0)->first();

        if ($this->orden_actual) {
            $this->orden_actual_productos = OrderDetails::with('productos')->where('order_id', $this->orden_actual->id)->get();
        } else {
            $this->orden_actual_productos = collect();
        }

        if ($this->orden_actual) {
            $productosEnOrden = OrderDetails::where('order_id', $this->orden_actual->id)
                ->pluck('product_id');
        } else {
            $productosEnOrden = collect();
        }

        
        $this->productos_elegibles = ClientProduct::with('productos')->where('client_id', $this->usuario_actual)->whereNotIn('product_id', $productosEnOrden)->get();
        //dd($this->orden_actual_productos->productos);
        //$this->orden_actual =Order::where('client_id',$this->usuario_actual)->where('estado',0)->get();



    }
}
