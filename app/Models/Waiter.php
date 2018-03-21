<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * This model represnts a Waiter.
 * A Waiter is not a User.
 * 
 * Accepts name: string, email: string, password: string, address: string, salary: double, monthly_comission: double, comission_percentage: double
 * monthly_orders_total_value: double, admission_date: Date, demission_date: Date, status.
 * Status represents if the Waiter is active or not. If not, the logging will always fail.
 * The password is a hidden field, which means the password will not be returned when getting the full object.
 */
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
