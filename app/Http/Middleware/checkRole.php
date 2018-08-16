<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if(! $request->user()->hasRole($role))
        {
            abort(403,'not authorised');
        
        }
            return $next($request);
    }
}
