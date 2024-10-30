<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Verificați dacă utilizatorul este autentificat
        if (Auth::check()) {
            // Verificați dacă utilizatorul are unul dintre rolurile specificate
            foreach ($roles as $role) {
                if (Auth::user()->role == $role) {
                    return $next($request);
                }
            }
        }

        // Redirectați utilizatorul către pagina de login dacă nu are permisiunile necesare
        return redirect('/login')->with('error', 'Permission denied.');
    }
}
