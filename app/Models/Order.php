<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'client_id',
        'estado',
    ];
    public function productos()
{
    return $this->belongsTo(OrderDetails::class,'order_id');
}
}
