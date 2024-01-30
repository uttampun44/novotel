<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;


    protected $guard = 'admin';

    protected $fillable = [
      'name',
      'email',
      'password'
    ];

    protected $hidden = [
        'password',
        'remeber_token'
    ];

    protected $cast = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
