<?php

namespace App\Http\Middleware;

use Closure;

class RedirigirsiestaAutenticado
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
        if(true){
            return $next($request);
        }else{
return  response('no se a logrado acceder a la ruta ',404);
        }
    }
}
