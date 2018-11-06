<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

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

        if (Auth::user() &&  (Auth::user()->roles == "Farmer" || Auth::user()->roles == "Customer")) {
            return $next($request);
            }

        return redirect('/404');
    }
}
