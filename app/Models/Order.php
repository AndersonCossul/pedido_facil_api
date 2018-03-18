<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillabe = [
        'name',
        'card_id',
        'table_id',
        'print_status',
        'total_value',
        'date',
        'status'
    ];
}
