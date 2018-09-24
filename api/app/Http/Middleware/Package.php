<?php

namespace App\Http\Middleware;

use Closure;

class Package
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
        return $next($request)->header('Acess-Control-Allow-Origin','*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE,OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Cntent-Type, Authorization') ;
    }
}
