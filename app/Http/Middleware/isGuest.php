<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kalau ada login boleh akses
        if (Auth::check() && Auth::user()->role == 'admin') {
            return redirect('landing-page')->with('failed', 'Anda telah login, tidak bisa kembali');
        } else {
            // Kalau belum login balikin ke login
            return $next($request);
        }

        return redirect()->route('/')->with('error', 'Tidak memiliki akses');
    }
}