<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DokterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $dokter_role_id = 2;
        //  Check if the user is authenticated and has main-admin privileges
        if (auth()->check() && auth()->user()->role_id == $dokter_role_id) {
            // If the user is an main-admin, continue with the request
            return $next($request);
        }

        // If the user is not an main-admin, redirect to a 403 page (Forbidden).
        return response()->view('starter.403', [], 403);
    }
}
