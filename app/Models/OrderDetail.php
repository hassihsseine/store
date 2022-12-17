<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'order_id', 'product_color_size_id', 'quantity',
                           'price', 'discount'];

    protected $table = 'order_detail';


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function productColorSize(){
        return $this->belongsTo(ProductColorSize::class);
    }
}
