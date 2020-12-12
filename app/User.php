<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     *d
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()

    {
          return   $this->belongsToMany(Role::class,'mdluu_role_assignments','userid','roleid')->withPivot('contextid')->where('contextid', '=', 259);



    }


    public function  hasRole($roles)
    {

        foreach($roles as $role)
        {
            foreach($this->roles as $userRole )
            {

                if($userRole->shortname === $role)
                {
                  return  true ;

                }

            }

        }
 return false;

    }

    protected $table = 'mdluu_user';



}
