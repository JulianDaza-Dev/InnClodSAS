<?php

namespace App\Livewire;

use App\Models\ClientProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function Pest\Laravel\get;

class AdministrarCliente extends Component
{
    public $usuario;
    public $productos_visibles;
    public $productos_ids;
    public $productos_ocultos;

    public function agregar($id)
    {
        ClientProduct::create([
            'client_id'=>$this->usuario->id,
            'product_id'=>$id
        ]);
        return redirect(request()->header('Referer'));
    }
    public function eliminar($id)
    {
        $producto_eliminar = ClientProduct::find($id);
        $producto_eliminar->delete();
        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.administrar-cliente');
    }

    public function mount($usuario)
    {
        $this->usuario = User::find($usuario);
        $this->productos_visibles =ClientProduct::with('productos')->where('client_id',$this->usuario->id)->get();
        //dd($this->productos_visibles);
        $this->productos_ids = ClientProduct::where('client_id', $this->usuario->id)->pluck('product_id')->toArray();
        $this->productos_ocultos = Product::whereNotIn('id', $this->productos_ids)->get();

    }
}
