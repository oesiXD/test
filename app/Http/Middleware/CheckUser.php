<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


     try{
        $U = User::findOrFail($request->user()->id);
     }catch  ( \Throwable $e){
        return redirect('/');

     }

        foreach ($U->roles as $role){
           $dato= $role->shortname;
        }



        if(Auth::check() && ($dato !='student')){


            return $next($request);
        }


        return redirect('/');
    }



}
