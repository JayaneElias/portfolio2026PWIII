<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificarAcesso
{
    public function handle(Request $request, Closure $next): Response
    {
        $autorizado = false;

        $request->attributes->set('autorizado', $autorizado);

        return $next($request);
    }
}