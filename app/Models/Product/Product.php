<?php
namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * Represents a product.
 * This can be any food or drink.
 * It's connected to several classes: Additional, Category, Group, Ingredient
 * 
 * Accepts name: string, price: double, stock_quantity: integer, category_id: integer, group_id: integer, status: tinyInteger.
 */
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

    /**
     * Returns an array of optionals ingredients for this product.
     * Not all ingredients are stored in the database, just the ones that are optionals.
     *
     * @return array
     */
    public function getIngredients()
    {
        return $this->hasMany('App\Models\Product\Ingredient');
    }

    /**
     * Returns an array of additionals that can be attached to the product.
     *
     * @return array
     */
    public function getAdditionals()
    {
        return $this->hasMany('App\Models\Product\Additional');
    }

    /**
     * Returns the Category Object that this product belongs.
     *
     * @return object
     */
    public function getCategory()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    /**
     * Returns the Group Object that this product belongs.
     *
     * @return void
     */
    public function getGroup()
    {
        return $this->belongsTo('App\Models\Group', 'group_id');
    }
}
