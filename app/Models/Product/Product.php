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

    public function getIngredients()
    {
        return $this->hasMany('App\Models\Product\Ingredient');
    }

    public function getAdditionals()
    {
        return $this->hasMany('App\Models\Product\Additional');
    }

    public function getCategory()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function getGroup()
    {
        return $this->belongsTo('App\Models\Group', 'group_id');
    }
}
