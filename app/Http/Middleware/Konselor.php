<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Konselor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        $userRoles = Auth::user()->roles;
        if($userRoles == 3)
        {
            return $next($request);
        }
        if($userRoles == 1)
        {
            return redirect()->route('admin.dashboard');
        }
        if($userRoles == 2)
        {
            return redirect()->route('user.dashboard');
        }
    }
}
