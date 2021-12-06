<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        if (auth()->user()->role == 'admin') {
            return $next($request);
        }
        else if (auth()->user()->role == 'staff')
         {
            return $next($request);
         }
        else if (auth()->user()->role == 'intern')
        {
           return $next($request);
        }
        return redirect('home')->with('error',"You don't have admin/staff/intern access.");
    }
}