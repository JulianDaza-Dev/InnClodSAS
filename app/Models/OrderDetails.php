<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    public $fillable =['order_id','product_id','quantity'];

    public function productos()
{
    return $this->belongsTo(Product::class,'product_id');
}
}
