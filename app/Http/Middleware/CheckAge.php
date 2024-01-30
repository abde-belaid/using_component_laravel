<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->age > 18) {

            dd("l'age est valide");
            // dd($request->ag);
            return $next($request);
        }
        else{
            // return redirect(route("error"));
            dd("l'age est invalide");

        }

    }
}
