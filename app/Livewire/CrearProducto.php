<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class CrearProducto extends Component
{
    public $name;

    public $stock;

    public function crear()
    {
        $validacion= $this->validate([
            "name"=> "required|min:3|max:100",
            "stock"=> "required"],
        [
            "name.required"=> "nombre requerido",
            "name.min"=> "nombre muy corto",
            "name.max"=> "nombre muy largo",
            "stock.required"=> " requerida"
        ]);

        Product::create($validacion);
        to_route("inicio");
    }

    public function render()
    {
        return view('livewire.crear-producto');
    }
}
