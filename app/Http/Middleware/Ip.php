<?php

namespace App\Http\Middleware;

use Closure;

class Ip
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
        //affiche l'ip de l'user
        //dd($request->ip());
        if($request->ip() == '192.168.33.53'){
            return $next($request);
        }

        return response('Unauthorized', '401');
    }
}
