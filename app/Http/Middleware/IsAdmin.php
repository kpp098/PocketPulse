<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Volt handles auth via Livewire, but we can still use auth() here
        if (! auth()->check() || ! auth()->user()->is_admin) {
            // Redirect non-admins somewhere safe, e.g., dashboard
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
