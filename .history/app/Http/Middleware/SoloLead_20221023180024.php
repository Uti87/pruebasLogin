<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SoloLead
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        switch(auth::user()->tipo){
            case ('Lead'):
                return $next($request);//si es lead continua a la ruta LEAD
            break;
	        case('Partner'):
                return redirect('leads');// si es un usuario normal redirige a la ruta PARTNER
	        break;	
           

    }
}
}
