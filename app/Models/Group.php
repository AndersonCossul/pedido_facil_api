<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'product_groups';
    protected $fillabe = [
        'name',
    ];
}
