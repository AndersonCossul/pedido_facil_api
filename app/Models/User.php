<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
