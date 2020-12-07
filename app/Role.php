<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public function user(){
    return $this->hasOne(User::class,'id');
  }
  protected $table = 'mdluu_role';

}
