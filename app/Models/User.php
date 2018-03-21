<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Represents a user.
 * This user has access to the list of orders.
 * This user has access to the /admin if isAdmin is 1.
 * A waiter is not stored as a user!
 * 
 * Accepts name: string, email: string, password: string, isAdmin: tinyInteger, status: tinyInteger.
 * Status represents if the user is active or not. If not, logging will always fail.
 * The password is a hidden field, so it'll not be passed along when getting the full object.
 */
class User extends Model
{
    protected $table = 'users';
    protected $fillabe = [
        'name',
        'email',
        'password',
        'isAdmin',
        'status'
    ];
    protected $hidden = ['password'];
}
