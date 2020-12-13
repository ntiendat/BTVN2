<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Check
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
      
        if($request->data=="admin" or $request->data1=="admin"){
        return $next($request);

        }
        else{
            return redirect("/form");

        }

    }
}
