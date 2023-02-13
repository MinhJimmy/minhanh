<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'id_product';
    protected $guarded = [];
    public $timestamps = false;

    public function productCategory()
    {
        return $this->belongsTo(Category::class, 'id_catalog', 'id_catalog');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id_product');
    }
}
