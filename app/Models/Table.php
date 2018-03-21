<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Represents a table (a physical table, where the clients sit, not a database one).
 * 
 * Accepts name: string, status: tinyInteger.
 * Status represents if the Table is available or not.
 */
class Table extends Model
{
    protected $table = 'tables';
    protected $fillabe = [
        'name',
        'status'
    ];
}
