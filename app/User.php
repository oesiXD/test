<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use  Laravel\Passport\HasApiTokens;;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

     protected $table = 'my_users';
}


