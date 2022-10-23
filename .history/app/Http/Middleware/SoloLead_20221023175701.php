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
            case ('1'):
                return $next($request);//si es administrador continua al HOME
            break;
	case('2'):
                return redirect('leeds');// si es un usuario normal redirige a la ruta USER
	break;	
            case ('3'):
                return redirect('partners');//si es administrador redirige al moderador
            break;

    }
}
