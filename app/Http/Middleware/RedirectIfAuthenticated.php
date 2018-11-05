<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()&&Auth::user()->roles=="Admin") {
        //    return redirect()->route('home_page');
        // }else if(Auth::guard($guard)->check()&&Auth::user()->roles=="Customer"){
        //     return redirect()->route('crops.index');
        // }else if(Auth::guard($guard)->check()&&Auth::user()->roles=="Farmer"){
        //     return redirect()->route('inventory.index');
        // } 
        if(Auth::guard($guard)->check()){
            return redirect()->route('home_page');
        }

        return $next($request);
    }
}
