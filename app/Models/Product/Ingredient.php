<?php
namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'product_ingredients';
    protected $fillabe = [
        'name',
        'status'
    ];
}
