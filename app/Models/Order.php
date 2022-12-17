<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'status', 'payment_method', 'payment_staus', 'payment_id',
                           'total_price', 'address', 'phone', 'email', 'name', 'city', 'postal_code', 'country',
                           'shipping_price'];

    protected $table = 'orders';


    public function user(){
        return $this->belongsTo(User::class);
    }
}
