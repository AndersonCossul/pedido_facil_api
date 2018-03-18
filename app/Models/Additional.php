<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    protected $table = 'additionals';
    protected $fillabe = [
        'name',
        'price',
        'status'
    ];
}
