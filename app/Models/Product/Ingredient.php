<?php
namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * Represents the ingredients a product may have.
 * Will be useful for selecting just a few ingredients in the order instead of all.
 * Could be meat, chicken, cheese, salad.
 * 
 * Accepts name: string, status: tinyInteger.
 * Status will be indicate if the ingredient is available in stock.
 */
class Ingredient extends Model
{
    protected $table = 'product_ingredients';
    protected $fillabe = [
        'name',
        'status'
    ];
}
