<?php
namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'product_groups';
    protected $fillabe = [
        'name',
    ];
}
