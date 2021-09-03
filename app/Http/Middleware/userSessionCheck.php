<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class userSessionCheck
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
        if(! session()->has('username')){
            $request->session()->flash('userNeedAuth', TRUE);
            return redirect('login');
        }
        return $next($request);
    }
}
