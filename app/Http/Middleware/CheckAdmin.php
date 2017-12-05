<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;

class CheckAdmin
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
        if(Auth::user()->admin == 0){
            Session::flash('info' , 'You Can not Enter Here ');
            return redirect()->back();
        }
        return $next($request);
    }
}
