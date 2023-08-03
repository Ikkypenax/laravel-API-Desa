<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateUrl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (!preg_match('/^\/api\/desa(\/\d+)?$/', $request->getPathInfo())) {
            return response()->json(['message' => 'URL tidak valid'], 400);
        }

        return $next($request);
    }
}
