<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kalau ada login boleh akses
        if (Auth::check()) {
            return $next($request);
        } else {
            // Kalau belum login balikin ke login
            return redirect()->route('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }
}
