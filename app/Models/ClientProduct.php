<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientProduct extends Model
{
    protected $fillable = [
        'client_id',
        'product_id'
    ];
    public function productos()
{
    return $this->belongsTo(Product::class,'product_id');
}
}
