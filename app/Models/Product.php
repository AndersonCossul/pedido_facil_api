<?php
namespace App\Models;

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
