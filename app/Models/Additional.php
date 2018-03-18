<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    protected $table = 'product_additionals';
    protected $fillabe = [
        'name',
        'price',
        'status'
    ];
}
