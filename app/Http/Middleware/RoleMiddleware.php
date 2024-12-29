<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
          // Check if the user is logged in
          if (!Auth::check()) {
            return redirect()->route('login.form')->with('error', 'Please login to continue.');
        }
       
        if ($request->user()->role !== $role) {
            return redirect()->route('register.form'); // Redirect to the root URL
        }

        return $next($request);
    }
}
