<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class DoctorValidatorController
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
        if (Session::has('id') && (Session::has('type')==1)){
            return $next($request);
        }
        else{
            return redirect('/login');
        }
    }
}
