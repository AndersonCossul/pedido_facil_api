<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'product_ingredients';
    protected $fillabe = [
        'name',
        'status'
    ];
}
