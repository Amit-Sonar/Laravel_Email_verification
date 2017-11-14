<?php

namespace App\Http\Middleware;

use Closure;





class ActiveAccount
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
       
       if ( $request->user()->verified === 0 && !$request->user()->email_token == null ) {
            return  redirect('/activateAccount');
        }
        
            
        
        return $next($request);
    }
}
