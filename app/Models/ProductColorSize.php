<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'product_size_id', 'product_color_id', 'quantity', 'price_two', 'discount', 'status'];

    protected $table = 'product_color_sizes';

    public function productColor(){
        return $this->belongsTo(ProductColor::class);
    }

    public function pructSize(){
        return $this->belongsTo(ProductSize::class);
    }
}
