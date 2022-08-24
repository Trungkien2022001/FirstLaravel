<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $fillable = [
        'id',
        'name',
        'username',
        'email',
        'password',
        'phone',
        'address',
        'email',
        'isAdmin',
        'token',
    ];
    protected $hidden = [
        'password',
        'token',
    ];
}
