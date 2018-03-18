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

    public function getCartao()
    {
        return $this->belongsTo('App\Models\Card', 'cartao_id');
    }

    public function getTable()
    {
        return $this->belongsTo('App\Models\Table', 'table_id');
    }

    public function waiters()
    {
        return $this->hasMany('App\Models\Waiter');
    }

    public function getProducts()
    {
        return $this->hasMany('App\Models\Product\Product');
    }
}
