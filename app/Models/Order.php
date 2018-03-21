<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Represents an order.
 * It's connected to several other classes: Card, Table, Waiter, Product.
 * 
 * Accepts name: string, card_id: integer, table_id: integer, print_status: tinyInteger, total_value: double, date: Date, status: tinyInteger.
 * Print Status represents if the order was already printed in a scanner, is being printed or indicates an error.
 * Status represents if the order is still open or was already closed.
 */
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

    /**
     * Returns the Card Object used in the order.
     *
     * @return object
     */
    public function getCard()
    {
        return $this->belongsTo('App\Models\Card', 'cartao_id');
    }

    /**
     * Returns the Table Object for the order.
     *
     * @return object
     */
    public function getTable()
    {
        return $this->belongsTo('App\Models\Table', 'table_id');
    }

    /**
     * Returns an array of Waiter objects related to this Order.
     *
     * @return array
     */
    public function waiters()
    {
        return $this->hasMany('App\Models\Waiter');
    }

    /**
     * Returns an array of Product of the order.
     *
     * @return array
     */
    public function getProducts()
    {
        return $this->hasMany('App\Models\Product\Product');
    }
}
