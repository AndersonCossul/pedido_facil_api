<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * This model represents types of cards.
 * Could be credit cards, debit card, or just money!
 * 
 * Accepts name: string, status: tinyInteger.
 * Status represents if the actual card is available at the moment.
 */
class Card extends Model
{
    protected $table = 'cards';
    protected $fillabe = [
        'name',
        'status'
    ];
}
