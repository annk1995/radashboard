<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        

        $url ='';
        if(auth()->check() && auth()->user()->role ==='admin' ){
            $url='admin/dashboard';
        }elseif(auth()->check() && auth()->user()->role ==='agent'){
            $url='agent/dashboard';

        }elseif(auth()->check() && auth()->user()->role ==='user'){
            $url ='home';

        }
        return $next($request,$url);
    }
}
