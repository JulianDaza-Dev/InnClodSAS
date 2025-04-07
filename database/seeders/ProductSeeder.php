<?php

namespace Database\Seeders;

use App\Models\ClientProduct;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //PRODUCTOS
        Product::create([
            'name'=>'Licuadora',
            'stock'=>10
        ]);
        Product::create([
            'name'=>'Sarten',
            'stock'=>5
        ]);
        Product::create([
            'name'=>'Olla',
            'stock'=>1
        ]);
        Product::create([
            'name'=>'Plato',
            'stock'=>0
        ]);

        Product::create([
            'name'=>'Taper',
            'stock'=>15
        ]);
        Product::create([
            'name'=>'Cuchillo',
            'stock'=>7
        ]);

        //PRODUCTOS CLIENTES
        ClientProduct::create([
            'client_id'=> 2,
            'product_id'=> 1,
        ]);
        ClientProduct::create([
            'client_id'=> 2,
            'product_id'=> 2,
        ]);
        ClientProduct::create([
            'client_id'=> 2,
            'product_id'=> 3,
        ]);
        ClientProduct::create([
            'client_id'=> 3,
            'product_id'=> 4,
        ]);
        ClientProduct::create([
            'client_id'=> 3,
            'product_id'=> 5,
        ]);
        ClientProduct::create([
            'client_id'=> 4,
            'product_id'=> 6,
        ]);
    }
}
