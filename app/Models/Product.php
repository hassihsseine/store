<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'description', 'image', 'price',
                           'discount_price', 'category_id', 'deleted_at',];

    protected $table = 'products';

    public function category(){
        return $this->belongsTo(category::class, 'category_id');
    }

    public function productColorSize(){
        return $this->belongsTo(ProductColorSize::class);
    }

    public function productColors(){
        return $this->hasMany(ProductColor::class);
    }

    public function productSizes(){
        return $this->hasMany(ProductSize::class);
    }
}
