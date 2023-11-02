<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;


class Mensajes 
{
    public function handle($request, Closure $next)
    {
        // Antes de cargar la página de inicio
        Log::info("Primer hola mundo");

        return $next($request);
    }

    //public function terminate($request, $response)
    //{
        // Una vez que se ha cargado la página de inicio
     //   Log::info("Segundo Hola mundo");
    //}
}
