<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Waiter extends Model
{
    protected $table = 'waiters';
    protected $fillabe = [
        'name',
        'email',
        'password',
        'address',
        'salary',
        'monthly_commission',
        'commission_percentage',
        'monthly_orders_total_value',
        'admission_date',
        'demission_date',
        'status'
    ];
    protected $hidden = ['password'];
}
