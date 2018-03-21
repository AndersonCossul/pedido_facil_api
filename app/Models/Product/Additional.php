<?php
namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * Class that represent the additionals a product can have.
 * Could be double meat, double cheese, lemon and ice.
 * 
 * Accepts name: string, price: double, status: tinyInteger.
 * Status will be indicate if the ingredient is available in stock.
 */
class Additional extends Model
{
    protected $table = 'product_additionals';
    protected $fillabe = [
        'name',
        'price',
        'status'
    ];
}
