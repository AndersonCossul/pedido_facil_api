<?php
namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * Represents the category of a Product.
 * Could be food or drink.
 * 
 * Accepts name: string
 */
class Category extends Model
{
    protected $table = 'product_categories';
    protected $fillabe = [
        'name',
    ];
}
