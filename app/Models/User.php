<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable  
{
    use HasFactory, HasApiTokens, Notifiable; 

    protected $table = 'users';

    protected $fillable = [
        'id_number',
        'fullname',
        'role',
        'password'
    ];

    // protected $guards = ['id_number'];
}