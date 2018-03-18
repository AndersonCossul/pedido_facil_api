<?php
namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillabe = [
        'name',
        'price',
        'stock_quantity',
        'category_id',
        'group_id',
        'status'
    ];
}
