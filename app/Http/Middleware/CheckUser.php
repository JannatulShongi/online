<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(!auth()->check()){
            return redirect()->route('frontend.user.login');
    }
    if(auth()->user()->role=='user')
    {
        return $next($request);
    }
    return redirect()->route('frontend.layouts.home')->withErrors('Permission Denied.');
}
}
