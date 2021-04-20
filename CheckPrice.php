<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPrice
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
        if ($request->price < 150)
        {

           return Redirect()->back()->withErrors(['Error', 'The Price must be >= 150 ILS']);
        }
        else 
        {
        return $next($request);
        }
    }
}
