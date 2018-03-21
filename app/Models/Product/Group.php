<?php
namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * Represents the group a product is connected to.
 * Could be burger, quick plates, beers, wines, waters, vegetarians
 * 
 * Accepts name: string.
 */
class Group extends Model
{
    protected $table = 'product_groups';
    protected $fillabe = [
        'name',
    ];
}
